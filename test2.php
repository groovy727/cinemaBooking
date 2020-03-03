 <?php
	/*echo $_SESSION['theatre'],"<br>";
	echo $_SESSION['movie'],"<br>";
	echo $_SESSION['showid'],"<br>";
	echo $_SESSION['category'],"<br>";
	echo $_SESSION['date'],"<br>";
	echo $_SESSION['overallseat'],"<br>";
	echo $_SESSION['fullseat'],"<br>";
	echo $_SESSION['halfseat'],"<br>";*/
	 
	$theatreid=$_SESSION['theatre'];
	$movieid=$_SESSION['movie'];
	$showid=$_SESSION['showid'];
	$category=$_SESSION['category'];
	$date=$_SESSION['date'];
	//fetching min and max date
	$sql="select * from shows where show_id=".$showid;
	$query=mysqli_query($con,$sql);
	$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$start=$a['show_start_date'];
	$end=$a['show_end_date'];
	@$price=$a['show_price'];
	$time=$a['show_start_time'];
	
	//echo gettype($price);
	$price= intval($price);
	//echo gettype($price);
	//echo $price;
	// Fetching thaeatre name
	$sql1="select * from theatre where theatre_id=".$theatreid;
	$query1=mysqli_query($con,$sql1);
	$b=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$theatre=$b['theatre_name'];
	// Fetching Movie name
	$sql2="select * from movies where movie_id=".$movieid;
	$query2=mysqli_query($con,$sql2);
	$c=mysqli_fetch_array($query2,MYSQLI_ASSOC);
	$movie=$c['movie_name'];
	
	//fetching available seats
	$sql3="select * from booking where show_id='$showid' and booking_date='$date'";
	//echo $sql3;
	$query3=mysqli_query($con,$sql3);
	while(@$d=mysqli_fetch_array($query3,MYSQLI_ASSOC))
	{
		@$e[]=@$d['seat'];
	}
	foreach (@$e as $x)
	{ 
		@$z[]="'".@$x."'";
	}
	@$unavailseat=implode (",",$z);
	 
?> 
<html>
<head>

<style>
 #dialog{         
        font-size: 13px;
        text-align: justify;     
    } 
	 #check_btn_txt{
        font-size: 13px;
        font-weight: bold !important;
        font-variant: small-caps;
    }

.header{
background-color:white;
 background-image:none;}
.front{width: 90%;margin: 5px 32px 45px 32px;background-color: #f0f0f0; color: #666;text-align: center;padding: 3px;border-radius: 5px;} 
.booking-details {float: right;position: relative;width:20%;height: 450px; } 
.booking-details h3 {margin: 5px 5px 0 0;font-size: 16px;} 
.booking-details p{line-height:26px; font-size:16px; color:#999} 
.booking-details p span{color:#666} 
div.seatCharts-cell {color: #182C4E;height: 25px;width: 25px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;} 
div.seatCharts-seat {color: #fff;cursor: pointer;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius: 5px;} 
div.seatCharts-row {height: 35px; width: 100%} 
div.seatCharts-seat.available {background-color: #C1B7FF;} 
div.seatCharts-seat.focused {background-color: #FF0000;border: none;} 
div.seatCharts-seat.selected {background-color: #FF0000;} 
div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;} 
div.seatCharts-container {border-right: 1px dotted #adadad;width: 1100px;padding: 20px;float: left;} 
div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 16px;} 
ul.seatCharts-legendList {padding-left: 0px;} 
.seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;} 
span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;} 
.checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer} 
#selected-seats {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;} 
#selected-seats li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center} 
</style>

<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.seat-charts.min.js"></script>
<script type="text/javascript">
var price = '<?php echo $price; ?>';
var price = Number(price);
//price
$(document).ready(function() {
	var $cart = $('#selected-seats'), //Sitting Area
	$counter = $('#counter'), //Votes
	$total = $('#total'); //Total money
	 
	var sc = $('#seat-map').seatCharts({
		map: [ 
		<?php if($category=="GOLD")
		{?>
    		'a_____________________________a',
            'aaaaaa_aaaaaaaaaaaaaaaa__aaaaaa',
            'aaaaaa_aaaaaaaaaaaaaaaa__aaaaaa',
            'aaaaaa_aaaaaaaaaaaaaaaa__aaaaaa',
            'aaaaaa_aaaaaaaaaaaaaaaaa_aaaaaa',
            'aaaaaa_aaaaaaaaaaaaaaaaa_aaaaaa',
            'aaa_________________________aaa',
		<?php }
		else if($category=="ODC")
		{?>
			 
			'_________aaaaaaaaaaaaaa__________',
			'aaaaaa___aaaaaaaaaaaaaa____aaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaaa_aaaaaaaaaaaaaaa_aaaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaaa__aaaaaaa',
			'aaaaaaa__aaaaaaaaaaaaaa___aaaaaaa',
		<?php
		} else if($category=="BOX")
		{
		?>
 
			'a___a____a___a____a___a___a___a',
		<?php } ?>
            ],
		naming : {
			top : false,
		<?php
		 if($category=="ODC")
		{
		?>
			rows: ['T','S','R','Q','P','O','N','M','L','K','J','I','H','G','F','E','D','C','B','A'],
		<?php
		}else if ($category=="GOLD")
		{
		?>
		rows: ['G','F','E','D','C','B','A'],
		<?php
		}else {
			?>
				rows: [ 'A'],
		<?php
		}
		?>
			getLabel : function (character, row, column) {
			return column;
			}
		},
		/*getId  : function(character, rows, column) {
    return rows + '_' + column;
},
		getLabel : function (character, rows, column) {
    return column;
},*/
		legend : { //Definition legend
			node : $('#legend'),
			items : [
				[ 'a', 'available',   'Option' ],
				[ 'a', 'unavailable', 'Sold'],
				//[ 'b', 'available',   'ODC Seats!' ],
				//[ 'b', 'unavailable', 'ODC seats sold!' ],
				//[ 'e', 'available',   'BOX seats'],
				//[ 'e', 'unavailable', 'Box-unavailable seats' ]
			]					
		},
		  

		click: function () { //Click event
		var seats = jQuery("#no_seats").val();
		 var len = jQuery('.selected').length;
		 
		   if (len==seats)
		   {	
			   	var x=document.getElementById("total").innerHTML;
				var y=document.getElementById("counter").innerHTML;
				var z=document.getElementById("selected-seats").innerHTML;			 
				window.location.href = "index.php?page=confirmbooking&total=" + x +"&ticket=" +y+"&seats="+z;  		   
		   }
			else if (this.status() == 'available')
				{ //optional seat
					 
				$('<li>'+(this.settings.row+1)+'_'+this.settings.label+'</li>')
					.attr('id', 'cart-item-'+this.settings.id)
					.data('seatId', this.settings.id)
					.appendTo($cart);
				//update ticket
				$counter.text(sc.find('selected').length+1);
				//update total price
				$total.text(recalculateTotal(sc)+price);
				return 'selected';
							
			} else if (this.status() == 'selected') { //Checked
					//Update Number
					$counter.text(sc.find('selected').length-1);
					//update totalnum
					$total.text(recalculateTotal(sc)-price);
						
					//Delete reservation
					$('#cart-item-'+this.settings.id).remove();
					//optional
					return 'available';
			} else if (this.status() == 'unavailable') { //sold
				return 'unavailable';
			} else {
				return this.style();
			}
		}
	});
	 //sc.find('a.available').status('unavailable');
	//sold seat
	//sc.get([<?php echo $unavailseat; ?>]).status('unavailable');
		sc.get(['C_2', 'C_3', 'C_4']).status('unavailable');
});
//sum total money
function recalculateTotal(sc) {
	var total = 0;
	var test = 0;
	sc.find('selected').each(function () {
		total += price;
		
	});
	return total;
}


</script>
</head>
<body>

<input type="hidden" id="no_seats" name="no_seats" value="<?php echo $_SESSION['overallseat']?>" />
<br><br><br> 
<script>
	//define your time in second
		var c=300;
        var t;
        timedCount();

        function timedCount()
		{

        	 
        	var seconds = c ;

        	var result =   + (seconds  < 10 ? "0" + seconds : seconds);

            
        	$('#timer').html(result);
            if(c == 0 )
			{
            	//setConfirmUnload(false);
                //$("#quiz_form").submit();
				window.location="index.php?page=bookticket";
			}
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
        }
	</script>

	<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well" ><h1 class="text-center">You have <span id="timer" style="color:red">300</span> seconds to complete this booking.</h1></div>
	</div>
	
		 
	</div>
		<?php
		if (@$_GET['secondstep']=="confirmbooking")
		{
			include ('confirmbooking.php');
		}
		else{
			
	?>
		<div class="row">
		<div class="col-sm-10">	
			<ul class="nav nav-tabs nav-justified">
				<li >
					<a href="index.php?page=bookticket"><h4 class="text-center info">Step 1-</h4></h6>Make Your Selection</h6></a>
				</li>
				<li class="active">
					<a><h4 class="text-center info">Step 2-</h4><p>Selection Preferences</p></a>
				</li>
				<li>
				<a ><h4 class="text-center info">Step 3-</h4><p>Confirm Booking</p></a>
				</li>
				<li><a><h4 class="text-center info">Step 4-</h4><p>Make Payment</p></a></li>
			  </ul> 
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<br><br>
 
<div class="demo">
   		<div id="seat-map">
			<div class="front">SCREEN</div>					
		</div>
		<div class="booking-details">
		<input type="hidden" value="" 
			<p><label>Movie:</label><span><h3 class="text-primary"> <?php echo $movie ?></h3></span></p>
			<p><label>Theatre:</label><span> <?php echo $theatre ?></span></p>
			<p>Time:<span><?php echo $time; ?></span></p>
			<p>Date:<span><?php echo $date; ?></span></p>
			<p>Seat: </p>
			<ul id="selected-seats"></ul>
			<p>Tickets: <b><span id="counter">0</span></b></p>
			<p>Total: <b>Ksh.<span id="total">0</span></b></p>
			<form method="post" name="myform">		
			<a href="#" class="btn btn-danger btn-lg" onclick="getVal()" name="buy">BUY</a>
			</form>		
			<div id="legend"></div>
		</div>
		<div style="clear:both"></div>
   </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </body>
 
  </html>

  <script type="text/javascript">
	function getVal()
	{
		var x=document.getElementById("total").innerHTML;
		var y=document.getElementById("counter").innerHTML;
		var z=document.getElementById("selected-seats").innerHTML;			 
		window.location.href =
		"index.php?page=selectseat&secondstep=confirmbooking&total=" + x +"&ticket=" +y+"&seats="+z;  
	}
  </script> 
 <?php
		}
 ?>
 