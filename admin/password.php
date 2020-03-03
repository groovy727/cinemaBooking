 <?php
 extract($_POST);
 extract($_SESSION);

 if(isset($updpass))
 {
 $pass=md5($op);
	$que=mysqli_query($con,"select * from admin where user_name='".$user."' and password='$pass'");
	
	$row= mysqli_num_rows($que);
	

	 if($row)
	 {
		if($np==$cp)
		{
		$pass1=md5($np);
		mysqli_query($con,"update admin set password='$pass1' where user_name='".$user."'");
		$err="<font color='green'>Password Updated Successfully !</font>";
		}
		else
		{
		$err="<font color='red'>New Password and Confirm not matched</font>";
		}
	 }
	 else
	 {
	  $err="<font color='red'>Old Password doesn't match</font>";
	 }
 
 }
 ?>

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-9">

<div class="panel panel-default">

<div class="panel-body">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" name="op" id="exampleInputPassword1" placeholder="Old Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" name="np" id="exampleInputPassword1" placeholder="New Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="cp" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  
  

<br/>
<div class="form-group">
    <button name="updpass" style="width:180px" class="btn btn-primary btn-block" type="submit">Update Password</button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>	