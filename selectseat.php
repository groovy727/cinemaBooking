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
	$showdate=$_SESSION['date'];
	//code for category=box;
	if ($category=="BOX")
	{
		header ('location:index.php?page=selectseatbox&category=BOX');
	}
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
	$sql3="select * from booking where show_id= '$showid' and show_date='$showdate' and (status='PENDING' or status='BOOKED')
	and category='$category'";
	
	$query3=mysqli_query($con,$sql3);
	
	 
	 
	 
?> 
<html>
<head>
   <script type="text/javascript">
	function preventBack(){
		window.history.forward();}
		setTimeout("preventBack(),0");
		window.onunload=function (){null};
		
 
</script>
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
	//$("#selected-seats").hide();
	$("#buy").hide();
	$("#test2").hide();
	$("#totaldiv").hide();
	$("#errmsg").hide();
	var $cart = $('#selected-seats'), //Sitting Area
	$counter = $('#counter'), //Votes
	$test2=$('#test2')
	$total = $('#total'); //Total money
	 
	var sc = $('#seat-map').seatCharts({
		map: [ 
		<?php if($category=="GOLD")
		{?>
    		'a[,G1]_____________________________a[,G2]',
            'a[,F1]a[,F2]a[,F3]a[,F4]a[,F5]a[,F6]_a[,F7]a[,F8]a[,F9]a[,F10]a[,F11]a[,F12]a[,F13]a[,F14]a[,F15]a[,F16]a[,F17]a[,F18]a[,F19]a[,F20]a[,F21]a[,F22]__a[,F3]a[,F24]a[,F25]a[,F26]a[,F27]a[,F28]',
            'a[,E1]a[,E2]a[,E3]a[,E4]a[,E5]a[,E6]_a[,E7]a[,E8]a[,E9]a[,E10]a[,E11]a[,E12]a[,E13]a[,E14]a[,E15]a[,E16]a[,E17]a[,E18]a[,E19]a[,E20]a[,E21]a[,E22]__a[,E3]a[,E24]a[,E25]a[,E26]a[,E27]a[,E28]',
            'a[,D1]a[,D2]a[,D3]a[,D4]a[,D5]a[,D6]_a[,D7]a[,D8]a[,D9]a[,D10]a[,D11]a[,D12]a[,D13]a[,D14]a[,D15]a[,D16]a[,D17]a[,D18]a[,D19]a[,D20]a[,D21]a[,D22]__a[,D3]a[,D24]a[,D25]a[,D26]a[,D27]a[,D28]',
			'a[,C1]a[,C2]a[,C3]a[,C4]a[,C5]a[,C6]_a[,C7]a[,C8]a[,C9]a[,C10]a[,C11]a[,C12]a[,C13]a[,C14]a[,C15]a[,C16]a[,C17]a[,C18]a[,C19]a[,C20]a[,C21]a[,C22]a[,C3]_a[,C24]a[,C25]a[,C26]a[,C27]a[,C28]a[,C29]',
			'a[,B1]a[,B2]a[,B3]a[,B4]a[,B5]a[,B6]_a[,B7]a[,B8]a[,B9]a[,B10]a[,B11]a[,B12]a[,B13]a[,B14]a[,B15]a[,B16]a[,B17]a[,B18]a[,B19]a[,B20]a[,B21]a[,B22]a[,B3]_a[,B24]a[,B25]a[,B26]a[,B27]a[,B28]a[,B29]',
			'a[,A1]a[,A2]a[,A3]_________________________a[,A4]a[,A5]a[,A6]',
		<?php }
		else if($category=="ODC")
		{?>
			'_________a[,T8]a[,T9]a[,T10]a[,T11]a[,T12]a[,T13]a[,T14]a[,T15]a[,T16]a[,T17]a[,T18]a[,T19]a[,T20]a[,T21]__________',
			'a[,S1]a[,S2]a[,S3]a[,S4]a[,S5]a[,S6]___a[,S7]a[,S8]a[,S9]a[,S10]a[,S11]a[,S12]a[,S13]a[,S14]a[,S15]a[,S16]a[,S17]a[,S18]a[,S19]a[,S20]____a[,S21]a[,S22]a[,S23]a[,S24]a[,S25]a[,S26]',
			'a[,R1]a[,R2]a[,R3]a[,R4]a[,R5]a[,R6]a[,R7]__a[,R8]a[,R9]a[,R10]a[,R11]a[,R12]a[,R13]a[,R14]a[,R15]a[,R16]a[,R17]a[,R18]a[,R19]a[,R20]a[,R21]___a[,R22]a[,R23]a[,R24]a[,R25]a[,R26]a[,R27]a[,R28]',
			'a[,Q1]a[,Q2]a[,Q3]a[,Q4]a[,Q5]a[,Q6]a[,Q7]__a[,Q8]a[,Q9]a[,Q10]a[,Q11]a[,Q12]a[,Q13]a[,Q14]a[,Q15]a[,Q16]a[,Q17]a[,Q18]a[,Q19]a[,Q20]a[,Q21]___a[,Q22]a[,Q23]a[,Q24]a[,Q25]a[,Q26]a[,Q27]a[,Q28]',
			'a[,P1]a[,P2]a[,P3]a[,P4]a[,P5]a[,P6]a[,P7]a[,P8]_a[,P9]a[,P10]a[,P11]a[,P12]a[,P13]a[,P14]a[,P15]a[,P16]a[,P17]a[,P18]a[,P19]a[,P20]a[,P21]a[,P22]a[,P23]_a[,P24]a[,P25]a[,P26]a[,P27]a[,P28]a[,P29]a[,P30]a[,P31]',
			'a[,N1]a[,N2]a[,N3]a[,N4]a[,N5]a[,N6]a[,N7]__a[,N8]a[,N9]a[,N10]a[,N11]a[,N12]a[,N13]a[,N14]a[,N15]a[,N16]a[,N17]a[,N18]a[,N19]a[,N20]a[,N21]___a[,N22]a[,N23]a[,N24]a[,N25]a[,N26]a[,N27]a[,N28]',
			'a[,M1]a[,M2]a[,M3]a[,M4]a[,M5]a[,M6]a[,M7]__a[,M8]a[,M9]a[,M10]a[,M11]a[,M12]a[,M13]a[,M14]a[,M15]a[,M16]a[,M17]a[,M18]a[,M19]a[,M20]a[,M21]a[,M22]__a[,M23]a[,M24]a[,M25]a[,M26]a[,M27]a[,M28]a[,M29]',
			'a[,L1]a[,L2]a[,L3]a[,L4]a[,L5]a[,L6]a[,L7]__a[,L8]a[,L9]a[,L10]a[,L11]a[,L12]a[,L13]a[,L14]a[,L15]a[,L16]a[,L17]a[,L18]a[,L19]a[,L20]a[,L21]___a[,L22]a[,L23]a[,L24]a[,L25]a[,L26]a[,L27]a[,L28]',
			'a[,K1]a[,K2]a[,K3]a[,K4]a[,K5]a[,K6]a[,K7]__a[,K8]a[,K9]a[,K10]a[,K11]a[,K12]a[,K13]a[,K14]a[,K15]a[,K16]a[,K17]a[,K18]a[,K19]a[,K20]a[,K21]a[,K22]__a[,K23]a[,K24]a[,K25]a[,K26]a[,K27]a[,K28]a[,K29]',
			'a[,J1]a[,J2]a[,J3]a[,J4]a[,J5]a[,J6]a[,J7]__a[,J8]a[,J9]a[,J10]a[,J11]a[,J12]a[,J13]a[,J14]a[,J15]a[,J16]a[,J17]a[,J18]a[,J19]a[,J20]a[,J21]___a[,J22]a[,J23]a[,J24]a[,J25]a[,J26]a[,J27]a[,J28]',
			'a[,H1]a[,H2]a[,H3]a[,H4]a[,H5]a[,H6]a[,H7]__a[,H8]a[,H9]a[,H10]a[,H11]a[,H12]a[,H13]a[,H14]a[,H15]a[,H16]a[,H17]a[,H18]a[,H19]a[,H20]a[,H21]a[,H22]__a[,H23]a[,H24]a[,H25]a[,H26]a[,H27]a[,H28]a[,H29]',
			'a[,G1]a[,G2]a[,G3]a[,G4]a[,G5]a[,G6]a[,G7]__a[,G8]a[,G9]a[,G10]a[,G11]a[,G12]a[,G13]a[,G14]a[,G15]a[,G16]a[,G17]a[,G18]a[,G19]a[,G20]a[,G21]___a[,G22]a[,G23]a[,G24]a[,G25]a[,G26]a[,G27]a[,G28]',
			'a[,F1]a[,F2]a[,F3]a[,F4]a[,F5]a[,F6]a[,F7]__a[,F8]a[,F9]a[,F10]a[,F11]a[,F12]a[,F13]a[,F14]a[,F15]a[,F16]a[,F17]a[,F18]a[,F19]a[,F20]a[,F21]a[,F22]__a[,F23]a[,F24]a[,F25]a[,F26]a[,F27]a[,F28]a[,F29]',
			'a[,E1]a[,E2]a[,E3]a[,E4]a[,E5]a[,E6]a[,E7]__a[,E8]a[,E9]a[,E10]a[,E11]a[,E12]a[,E13]a[,E14]a[,E15]a[,E16]a[,E17]a[,E18]a[,E19]a[,E20]a[,E21]___a[,E22]a[,E23]a[,E24]a[,E25]a[,E26]a[,E27]a[,E28]',
			'a[,D1]a[,D2]a[,D3]a[,D4]a[,D5]a[,D6]a[,D7]__a[,D8]a[,D9]a[,D10]a[,D11]a[,D12]a[,D13]a[,D14]a[,D15]a[,D16]a[,D17]a[,D18]a[,D19]a[,D20]a[,D21]a[,D22]__a[,D23]a[,D24]a[,D25]a[,D26]a[,D27]a[,D28]a[,D29]',
			'a[,C1]a[,C2]a[,C3]a[,C4]a[,C5]a[,C6]a[,C7]__a[,C8]a[,C9]a[,C10]a[,C11]a[,C12]a[,C13]a[,C14]a[,C15]a[,C16]a[,C17]a[,C18]a[,C19]a[,C20]a[,C21]___a[,C22]a[,C23]a[,C24]a[,C25]a[,C26]a[,C27]a[,C28]',
			'a[,B1]a[,B2]a[,B3]a[,B4]a[,B5]a[,B6]a[,B7]__a[,B8]a[,B9]a[,B10]a[,B11]a[,B12]a[,B13]a[,B14]a[,B15]a[,B16]a[,B17]a[,B18]a[,B19]a[,B20]a[,B21]a[,B22]__a[,B23]a[,B24]a[,B25]a[,B26]a[,B27]a[,B28]a[,B29]',
			'a[,A1]a[,A2]a[,A3]a[,A4]a[,A5]a[,A6]a[,A7]__a[,A8]a[,A9]a[,A10]a[,A11]a[,A12]a[,A13]a[,A14]a[,A15]a[,A16]a[,A17]a[,A18]a[,A19]a[,A20]a[,A21]___a[,A22]a[,A23]a[,A24]a[,A25]a[,A26]a[,A27]a[,A28]',
			
			<?php
		} else if($category=="BOX")
		{
		?>
 
			'a___a____a___a____a___a___a___a',
		<?php } ?>
            ],
		naming : {
			top : false,
			 
			left :false,
		<?php
		 if($category=="ODC")
		{
		?>
		//rows: ['T','S','R','Q','P','O','N','M','L','K','J','I','H','G','F','E','D','C','B','A'],
		<?php
		}else if ($category=="GOLD")
		{
		?>
		//rows: ['G','F','E','D','C','B','A'],
		<?php
		}
		?>
		//columns: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','2','23','24','25','26','27','28','29','30','31'],

			getLabel : function (character, row, column) {
			return column;
			},
			getId : function (character, row, column) {
				return row+"_"+column;
			},
		},
		 	 
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
	
			 if (this.status() == 'available')
				{ 
					var len = jQuery('.selected').length;
					if (len<=seats-1)
					{	
						//optional seat
						$("<li>"+this.settings.label+"  </li>")
						.attr('id', 'cart-item-'+this.settings.id)
						.data('seatId', this.settings.id)
						.appendTo($cart);
						
						$("<li>'"+(this.settings.row+1)+"_"+(this.settings.column+1)+"',</li>")
					.attr('id', 'test2-item-'+this.settings.id)
					.data('seatId', this.settings.id)
					.appendTo($test2);
					
						
						
					//update ticket
					$counter.text(sc.find('selected').length+1);
					//update total price
					$total.text(recalculateTotal(sc)+price);
					}
					if (len==seats-1)
					{	
					 //$("#buy").show();
					$("#errmsg").hide();
					document.getElementById("buy").click();
 					}	
					else if(len>=seats-1)
					{	
						$("#errmsg").show();
						return 'available';	 
					}
					return 'selected';
				}
				else if (this.status() == 'selected') 
				{ //Checked
					$('#cart-item-'+this.settings.id).remove();
					
					$('#test2-item-'+this.settings.id).remove();
					//optional
					//Update Number
					$counter.text(sc.find('selected').length-1);
					 
					//update totalnum
					//$total.text(recalculateTotal(sc)-price);
						
					//Delete reservation
					
					$("#buy").hide();
					return 'available';
			} else if (this.status() == 'unavailable') { //sold
				return 'unavailable';
			} else {
				return this.style();
			}			
		}
	});
	   
	  sc.get([<?php while ($d=mysqli_fetch_array($query3,MYSQLI_ASSOC))
	  {echo $d['seat'];}		   ?>]).status('unavailable');
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
 $(document).ready(function(){
    $("#check1").click(function(){				 
					var z=document.getElementById("selected-seats").innerText;
					var time=document.getElementById("timer").innerText;
					var seatid=document.getElementById("test2").innerText;
					window.location.href = 
						"index.php?page=confirmbooking&seats="+z+"&time="+time+"&seatid="+seatid;		
    });
	$("#check2").click(function(){				 
	 
	window.location.href="index.php?page=selectseat&category=<?php echo $category; ?>";	
    });
});
</script>
</head>
<body>
<input type="hidden" id="no_seats" name="no_seats" value="<?php echo $_SESSION['overallseat']?>" />
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
		<div class="well" ><h1 class="text-center">You have <span id="timer" style="color:red">300</span> 
		seconds to complete this booking.</h1></div>
	</div>
	
		<span id="test2"><br><br></span> 
	</div>
		 
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
	<br>
 <div class="demo">
   		<div id="seat-map">
		<h2 id="errmsg" class="text-center"><font color="red">You can select only <?php echo $_SESSION['overallseat']; ?> seats..</font></h2>
		<p class="text-center">
	<a href="#" id="buy" data-toggle="modal" class="btn btn-danger btn-lg" data-target="#checkavail">Buy Tickets</a> 
	</p>
			<div class="front">SCREEN</div>					
		</div>
		<div class="booking-details">
		<input type="hidden" value="" 
			<p><label>Movie:</label><span><h3 class="text-primary"> <?php echo $movie ?></h3></span></p>
			<p><label>Theatre:</label><span> <?php echo $theatre ?></span></p>
			<p>Time:<span><?php echo $time; ?></span></p>
			<p>Date:<span><?php echo $date; ?></span></p>
			 
			<ul id="selected-seats"></ul>
			<p>Tickets: <b><span id="counter">0</span></b></p>
			<p id="totaldiv">Total: <b>Ksh.<span id="total">0</span></b></p>
			 	
			<div id="legend"></div>
			 <form>
 </form>
		</div>
		<div style="clear:both"></div>
   </div>
 <br>
<div class="modal fade"  id="checkavail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    	<div class="modal-content">
   
        <div class="modal-header" style=" background-color:#284761;   color:#fff;">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">
		Book Seats</h4>
      	</div>
      	<div class="modal-body">
	
         Please click on CHECK AVAILABILITY button to continue with booking,
		 if your selection is available you will be redirected to next step automatically.
	</div>
	  
      
    <div class="modal-footer">
        <p class="text-center"><button class="btn btn-success" id="check1">CHECK AVAILABILITY</button>
        <button class="btn btn-success" id="check2">RESET SEATS</button></p>
		 
	</div>
</form>
</div> 
</div> 
</div> 
 
	
 
  </body>
 
  </html>

  
  </script> 
 <?php
		//}
 ?>
 