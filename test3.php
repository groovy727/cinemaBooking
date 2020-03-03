
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <base href="http://www.eapmovies.com/index.php" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="eapmovies, Sri lanka movie hall, savoy, liberty, queenlan, eap films" />
  <meta name="description" content="eapmovies.com is the new complete cinema entertainment experience. With the ultimate wide screen, sound and seating experience, a range of cafe and bar facilities and a delicious array of tasty treats, going to the movies is now easier" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>STEP 2 - Select preferences</title>
  <link href="/templates/eap_movies_template/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/media/system/css/calendar-jos.css" type="text/css"  title="Green"  media="all" />
  <link rel="stylesheet" href="http://www.eapmovies.com/components/com_eapmovies/assets/css/vader/jquery-ui-1.8.17.custom.css" type="text/css" />
  <link rel="stylesheet" href="/media/com_hikashop/css/frontend_default.css" type="text/css" />
  <style type="text/css">

#hikashop_category_information_module_55 div.hikashop_subcontainer {
	background:#FFFFFF;
}
#hikashop_category_information_module_55 .hikashop_rtop *,#hikashop_category_information_module_55 .hikashop_rbottom *{
	background:#FFFFFF;
}
			
#hikashop_category_information_module_55 div.hikashop_subcontainer,#hikashop_category_information_module_55 div.hikashop_subcontainer span {
	text-align:center;
}
#hikashop_category_information_module_55 div.hikashop_container {
	text-align:center;
}
			
#hikashop_category_information_module_55 div.hikashop_container {
	margin:10px 10px;
}
#hikashop_category_information_module_55 div.hikashop_category,#hikashop_category_information_module_55 div.hikashop_product{
	float:left;
	width:100%;
}
			
#hikashop_category_information_module_55 .hikashop_subcontainer {
     -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}
			
  </style>
  <script src="/media/system/js/calendar.js" type="text/javascript"></script>
  <script src="/media/system/js/calendar-setup.js" type="text/javascript"></script>
  <script src="http://www.eapmovies.com/components/com_eapmovies/assets/js/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="http://www.eapmovies.com/components/com_eapmovies/assets/js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>
  <script src="/media/com_hikashop/js/hikashop.js" type="text/javascript"></script>
  <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/media/system/js/core.js" type="text/javascript"></script>
  <script src="/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script type="text/javascript">
Calendar._DN = new Array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"); Calendar._SDN = new Array ("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"); Calendar._FD = 0; Calendar._MN = new Array ("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); Calendar._SMN = new Array ("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); Calendar._TT = {};Calendar._TT["INFO"] = "About the Calendar"; Calendar._TT["ABOUT"] =
 "DHTML Date/Time Selector\n" +
 "(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the « and » buttons to select year\n" +
"- Use the < and > buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

		Calendar._TT["PREV_YEAR"] = "Click to move to the previous year. Click and hold for a list of years."; Calendar._TT["PREV_MONTH"] = "Click to move to the previous month. Click and hold for a list of the months."; Calendar._TT["GO_TODAY"] = "Go to today"; Calendar._TT["NEXT_MONTH"] = "Click to move to the next month. Click and hold for a list of the months."; Calendar._TT["NEXT_YEAR"] = "Click to move to the next year. Click and hold for a list of years."; Calendar._TT["SEL_DATE"] = "Select a date."; Calendar._TT["DRAG_TO_MOVE"] = "Drag to move"; Calendar._TT["PART_TODAY"] = "Today"; Calendar._TT["DAY_FIRST"] = "Display %s first"; Calendar._TT["WEEKEND"] = "0,6"; Calendar._TT["CLOSE"] = "Close"; Calendar._TT["TODAY"] = "Today"; Calendar._TT["TIME_PART"] = "(Shift-)Click or Drag to change the value."; Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d"; Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e"; Calendar._TT["WK"] = "wk"; Calendar._TT["TIME"] = "Time:";
<!--

							function hikashopModifyQuantity(id,obj,add,form){
								if(add){
									add='&add=1';
								}else{
									add='';
								}
								var qty=1;
								if(obj){
									qty=parseInt(obj.value);
								}
								if(form){
									var varform = eval('document.'+form);
									if(varform){
										varform.submit();
									}
								}else{
									try{
										new Ajax('/component/hikashop/product/updatecart/tmpl-component?product_id='+id+'&quantity='+qty+add+'&return_url=aHR0cDovL3d3dy5lYXBtb3ZpZXMuY29tL2luZGV4LnBocD9vcHRpb249Y29tX2VhcG1vdmllcyZjb250cm9sbGVyPWJ1eXRpY2tldCZ0YXNrPXNlYXRwbGFuJkl0ZW1pZD0xNTcmcmVmPU1EUXlPRFEyTmpReFZ6RTJNalkzUURJNE5EVTNOakElM0Q%3D',  { method: 'get', onComplete: function(result) { var hikaModule = window.document.getElementById('hikashop_cart_module'); if(hikaModule){ hikaModule.innerHTML = result;} }}).request();
									}catch(err){
										new Request({url:'/component/hikashop/product/updatecart/tmpl-component?product_id='+id+'&quantity='+qty+add+'&return_url=aHR0cDovL3d3dy5lYXBtb3ZpZXMuY29tL2luZGV4LnBocD9vcHRpb249Y29tX2VhcG1vdmllcyZjb250cm9sbGVyPWJ1eXRpY2tldCZ0YXNrPXNlYXRwbGFuJkl0ZW1pZD0xNTcmcmVmPU1EUXlPRFEyTmpReFZ6RTJNalkzUURJNE5EVTNOakElM0Q%3D', method: 'get', onComplete: function(result) { var hikaModule = window.document.getElementById('hikashop_cart_module'); if(hikaModule){ hikaModule.innerHTML = result;} }}).send();
									}
								}
								return false;
							}
							
//-->
  </script>


<link rel="stylesheet" href="http://www.eapmovies.com/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="http://www.eapmovies.com/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="http://www.eapmovies.com/templates/eap_movies_template/css/style.css" type="text/css" />
<link rel="stylesheet" href="http://www.eapmovies.com/templates/eap_movies_template/css/960_24_col.css" type="text/css" />
<link rel="stylesheet" href="http://www.eapmovies.com/templates/eap_movies_template/css/reset.css" type="text/css" />
<!--<link rel="stylesheet" href="http://www.eapmovies.com/templates/eap_movies/css/text.css" type="text/css" />-->
<link rel="stylesheet" href="http://www.eapmovies.com/templates/eap_movies_template/css/superfish.css" type="text/css" />


<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="http://www.eapmovies.com/templates/eap_movies_template/css/ie.css" />    
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="http://www.eapmovies.com/modules/mod_now_showing/interface/js/html5.js"></script>
<![endif]-->

<script type="text/javascript">
  jQuery.noConflict();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1955100-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=202309233124770";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="gradient_bg_inner">
  <div class="top_bg_inner_page">
    <div class="container">
      <div class="header">
      <div class="container_24">
        <!-- <div class="offer_banner">
          <img src="/images/offer_banner.jpg" alt="Offer Banner">
        </div> -->
        <div class="logo_wrapper clearfix">
          <div class="grid_8" id="logo">
            <img src="http://www.eapmovies.com/templates/eap_movies_template/images/logo.png" />
          </div>
          <div class="grid_12" id="search_wrapper">
            <div class="log_wrap clearfix">
              <div class="top_menu grid_9 omega">
                                		<div class="moduletable">
					
<ul class="menu">
<li class="item-149"><a href="/logout" ><span><em>Logout</em></span></a></li><li class="item-151"><a href="/advertise-2" ><span><em>Advertise</em></span></a></li><li class="item-164"><a href="http://eapmovies.com/index.php?option=com_content&view=article&id=33&Itemid=163" ><span><em>Careers</em></span></a></li><li class="item-152"><a href="/component/eapmovies/?controller=contact&amp;Itemid=152" ><span><em>Contact Us</em></span></a></li></ul>
		</div>
	
                              </div>
              <div class="top_cart grid_3 alpha">
                		<div class="moduletable_mini_cart">
					<div class="hikashop_cart_module_mini" id="hikashop_cart_module_mini">
<div id="hikashop_cart_mini" class="hikashop_cart_mini">
			0 Item(s) in Cart		</div>
		<div class="clear_both"></div></div>
		</div>
	
              </div>
            </div>
          </div>
          <div class="grid_4 alpha" id="social_icons_wrapper">
            <ul>
              <li><a href="#"><img src="/images/fb_icon.png" alt="Facebook"></a></li>
              <li><a href="#"><img src="/images/tw_icon.png" alt="Twitter"></a></li>
              <li><a href="#"><img src="/images/pi_icon.png" alt="Pinrest"></a></li>
            </ul>
          </div>
        </div>
        <div id="main_menu">
          		<div class="moduletable_menu">
					
<ul class="menu sf-menu  sf-js-enabled sf-shadow">
<li class="item-101"><a href="/" ><span><em>Home</em></span></a></li><li class="item-110"><a href="/component/eapmovies/?controller=movies&amp;view=movielist&amp;Itemid=110" ><span><em>Movies</em></span></a></li><li class="item-111"><a href="/component/eapmovies/?controller=ratesandshowtime&amp;Itemid=111" ><span><em>Rates &amp; Show Times</em></span></a></li><li class="item-112"><a href="/component/eapmovies/?controller=theaters&amp;view=theaterlist&amp;Itemid=112" ><span><em>Theaters</em></span></a></li><li class="item-113"><a href="/news" ><span><em>News</em></span></a></li><li class="item-114"><a href="/component/eapmovies/?controller=offer&amp;Itemid=114" ><span><em>Offers</em></span></a></li><li class="item-115"><a href="/component/eapmovies/?controller=buyticket&amp;view=reservation&amp;Itemid=115" ><span><em>Buy Tickets</em></span></a></li><li class="item-116"><a href="/about-us" ><span><em>About Us</em></span></a></li></ul>
		</div>
	
        </div>
      </div>
    </div>
      <div class="container_24">
        <div class="braedcrumbs_wrapper">
          		<div class="moduletable">
					
<div class="breadcrumbs">
<a href="/" class="pathway">Home</a> &gt; <span>STEP 2 - Select preferences</span></div>
		</div>
	
        </div>
        <div class="message">
          
<div id="system-message-container">
</div>
        </div>
                <div class="content_wrapper_inner clearfix">
        <div class="buy_tickets_module">
        
        </div>
          <div class="grid_24" id="inner_page_full_width">
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
    .ui-widget .ui-widget{
        font-size: 0.6em !important;
        font-weight: bolder;
        background-color: #FFA71B !important;
        color:#000;
    }
    .ui-widget-header{
        font-size: 13px !important;
        background-color: #31013F !important;
        color:#fff;
    }
</style>
<script>
        
    
    function selectSeat(id)
    {
          var len = jQuery('.selected').length;
          var seats = jQuery("#no_seats").val();
          
          if(!jQuery('#'+id).hasClass('selected'))
          {
                if(len<seats)
                {
                    jQuery('#'+id).addClass('selected');                    
                }
               
          }
          else
          {
               jQuery('#'+id).removeClass('selected');
          }
            
          len = jQuery('.selected').length;
          
          if(len == seats)
          {
              jQuery('<div id="dialog" title="Book Seats"></div>')
                                        .html('<ul><li>Please click on <span id="check_btn_txt">CHECK AVAILABILITY</span> button to continue with booking, if your selection is available you will be redirected to next step automatically.</li></ul>')
                                        .dialog({ resizable: false,modal: true,
                                        buttons : {
                                            
                                            "CHECK AVAILABILITY": function() { 
                                                  jQuery(this).dialog("close");                       
                                                  jQuery('#adminForm2').submit();
                                            }, 
                                           
                                            "RESET SEATS": function() {
                                                  jQuery('li a').removeClass('selected');
                                                  jQuery(this).dialog("close");
                                            }
                                       }});       
//               jQuery('#confirm_res').show();
//               alert('All seats are selected');
//               jQuery(window).scrollTop(jQuery('#seatBooking').offset().top);
          }
          else
          {
               jQuery('#confirm_res').hide();
          }
          
     }
     
     function checkReservation()
     {             
            var values = jQuery('#seatplan').find(".selected").map(function() {
                    return jQuery(this).attr('seatid');
             }).get();         
             
            jQuery('#seats_resv').val(values);
            
            jQuery.post('index.php',{
                        'option':'com_eapmovies',
                        'controller':'buyticket',
                        'task':'confirmreservation',
                        'format':'raw',      
                        'bx_id':2845760,                        
                        'seats':values
            },function(result)
            {      var s = result.split('@@');                  
                   if(s[0]=='1')
                   {   
                       var $html = '<li style="Margin-left:350px;Font-Weight:Bold;Color:Red;Padding:6px;">Some seats are already booked.</li>'
                       jQuery(".reservation-errors-ul li").remove();
                       jQuery(".reservation-errors-ul").append($html);
                       jQuery('.reservation-errors').show();
                       jQuery(window).scrollTop(jQuery('.reservation-errors').offset().top);
                       jQuery(".seatplan_wrapper").hide();
                       jQuery(".reservationWrapper").slideDown();
                       jQuery('#seatBooking').html(s[1]);
                       return;
                   }
                   else
                   {   
                       document.adminForm.submit();
                       return;
                   }
                   return;
           });   
           
           return false;
    }  
      
</script>
<div class="page_wrapper clearfix">
    <h2>Buy Tickets</h2>
  <div class="steps_wrapper clearfix"> <span class="item_1">
    <h4>STEP 1 -</h4>
    <h5>Make your selection</h5>
    </span> <span class="item_2 active">
    <h4>STEP 2 -</h4>
    <h5>Select preferences</h5>
    </span> <span class="item_3">
    <h4>STEP 3 -</h4>
    <h5>Confirm booking</h5>
    </span> <span class="item_4">
    <h4>STEP 4 -</h4>
    <h5>Make Payment</h5>
    </span> 
  </div>
    
<form action="index.php?260348c848291048c4d0e783643ef91b=1" method="post" name="adminForm" id="adminForm2" onsubmit="return checkReservation();">        
    <input type="hidden" name="option" value="com_eapmovies" />
    <input type="hidden" name="task" value="reservetickets" />
    <input type="hidden" name="controller" value="buyticket" />
    <input type="hidden" name="id" value="2845760" />
    <input type="hidden" name="seats_resv" id="seats_resv" />    
     <!-- insert the hidden token to the form -->
    <input type="hidden" name="260348c848291048c4d0e783643ef91b" value="1" />   

<div class="reservation-errors">
    <ul class="reservation-errors-ul">        
    </ul>
</div>
     <div id="seatBooking">
     <div class="paragraph">
     <br />
     <p>You will be permitted a maximum of 300 seconds to complete your transaction.</p>
     <br />
     <p>Please select your seating preference and once you have completed select the option CHECK AVAILABILITY . This will verify the availability of your seats reserved. Note your seat selections are highlighted in GREEN.</p>
     <br />
     </div>
    <link href="http://www.eapmovies.com/components/com_eapmovies/includes/seatplan/theater_3/categories_101/css/seatplan.css"type="text/css" rel="stylesheet"><div class="bookingtimer" >You have <span id="timer">285</span> seconds to complete this booking.<button name="confirm_btn" style="display:none;" id="confirm_res" onclick="checkReservation();">Check Availability</button></div><div id="container"><ul id="seatplan"><li class="seat_01 A"><a class="" onClick="selectSeat('row_A1');" seatid="17687" title="A1" id="row_A1">A1</a></li><li class="seat_02 A"><a class="" onClick="selectSeat('row_A2');" seatid="17688" title="A2" id="row_A2">A2</a></li><li class="seat_03 A"><a class="" onClick="selectSeat('row_A3');" seatid="17689" title="A3" id="row_A3">A3</a></li><li class="seat_29 A"><a class="" onClick="selectSeat('row_A4');" seatid="17690" title="A4" id="row_A4">A4</a></li><li class="seat_30 A"><a class="" onClick="selectSeat('row_A5');" seatid="17691" title="A5" id="row_A5">A5</a></li><li class="seat_31 A"><a class="" onClick="selectSeat('row_A6');" seatid="17692" title="A6" id="row_A6">A6</a></li><li class="seat_01 B"><a class="" onClick="selectSeat('row_B1');" seatid="17693" title="B1" id="row_B1">B1</a></li><li class="seat_02 B"><a class="" onClick="selectSeat('row_B2');" seatid="17694" title="B2" id="row_B2">B2</a></li><li class="seat_03 B"><a class="" onClick="selectSeat('row_B3');" seatid="17695" title="B3" id="row_B3">B3</a></li><li class="seat_04 B"><a class="" onClick="selectSeat('row_B4');" seatid="17696" title="B4" id="row_B4">B4</a></li><li class="seat_05 B"><a class="" onClick="selectSeat('row_B5');" seatid="17697" title="B5" id="row_B5">B5</a></li><li class="seat_06 B"><a class="" onClick="selectSeat('row_B6');" seatid="17698" title="B6" id="row_B6">B6</a></li><li class="seat_08 B"><a class="" onClick="selectSeat('row_B7');" seatid="17699" title="B7" id="row_B7">B7</a></li><li class="seat_09 B"><a class="" onClick="selectSeat('row_B8');" seatid="17700" title="B8" id="row_B8">B8</a></li><li class="seat_10 B"><a class="" onClick="selectSeat('row_B9');" seatid="17701" title="B9" id="row_B9">B9</a></li><li class="seat_11 B"><a class="" onClick="selectSeat('row_B10');" seatid="17702" title="B10" id="row_B10">B10</a></li><li class="seat_12 B"><a class="" onClick="selectSeat('row_B11');" seatid="17703" title="B11" id="row_B11">B11</a></li><li class="seat_13 B"><a class="" onClick="selectSeat('row_B12');" seatid="17704" title="B12" id="row_B12">B12</a></li><li class="seat_14 B"><a class="" onClick="selectSeat('row_B13');" seatid="17705" title="B13" id="row_B13">B13</a></li><li class="seat_15 B"><a class="" onClick="selectSeat('row_B14');" seatid="17706" title="B14" id="row_B14">B14</a></li><li class="seat_16 B"><a class="" onClick="selectSeat('row_B15');" seatid="17707" title="B15" id="row_B15">B15</a></li><li class="seat_17 B"><a class="" onClick="selectSeat('row_B16');" seatid="17708" title="B16" id="row_B16">B16</a></li><li class="seat_18 B"><a class="" onClick="selectSeat('row_B17');" seatid="17709" title="B17" id="row_B17">B17</a></li><li class="seat_19 B"><a class="" onClick="selectSeat('row_B18');" seatid="17710" title="B18" id="row_B18">B18</a></li><li class="seat_20 B"><a class="" onClick="selectSeat('row_B19');" seatid="17711" title="B19" id="row_B19">B19</a></li><li class="seat_21 B"><a class="" onClick="selectSeat('row_B20');" seatid="17712" title="B20" id="row_B20">B20</a></li><li class="seat_22 B"><a class="" onClick="selectSeat('row_B21');" seatid="17713" title="B21" id="row_B21">B21</a></li><li class="seat_23 B"><a class="" onClick="selectSeat('row_B22');" seatid="17714" title="B22" id="row_B22">B22</a></li><li class="seat_24 B"><a class="" onClick="selectSeat('row_B23');" seatid="17715" title="B23" id="row_B23">B23</a></li><li class="seat_26 B"><a class="" onClick="selectSeat('row_B24');" seatid="17716" title="B24" id="row_B24">B24</a></li><li class="seat_27 B"><a class="" onClick="selectSeat('row_B25');" seatid="17717" title="B25" id="row_B25">B25</a></li><li class="seat_28 B"><a class="" onClick="selectSeat('row_B26');" seatid="17718" title="B26" id="row_B26">B26</a></li><li class="seat_29 B"><a class="" onClick="selectSeat('row_B27');" seatid="17719" title="B27" id="row_B27">B27</a></li><li class="seat_30 B"><a class="" onClick="selectSeat('row_B28');" seatid="17720" title="B28" id="row_B28">B28</a></li><li class="seat_31 B"><a class="" onClick="selectSeat('row_B29');" seatid="17721" title="B29" id="row_B29">B29</a></li><li class="seat_01 C"><a class="" onClick="selectSeat('row_C1');" seatid="17722" title="C1" id="row_C1">C1</a></li><li class="seat_02 C"><a class="" onClick="selectSeat('row_C2');" seatid="17723" title="C2" id="row_C2">C2</a></li><li class="seat_03 C"><a class="" onClick="selectSeat('row_C3');" seatid="17724" title="C3" id="row_C3">C3</a></li><li class="seat_04 C"><a class="" onClick="selectSeat('row_C4');" seatid="17725" title="C4" id="row_C4">C4</a></li><li class="seat_05 C"><a class="" onClick="selectSeat('row_C5');" seatid="17726" title="C5" id="row_C5">C5</a></li><li class="seat_06 C"><a class="" onClick="selectSeat('row_C6');" seatid="17727" title="C6" id="row_C6">C6</a></li><li class="seat_08 C"><a class="" onClick="selectSeat('row_C7');" seatid="17728" title="C7" id="row_C7">C7</a></li><li class="seat_09 C"><a class="" onClick="selectSeat('row_C8');" seatid="17729" title="C8" id="row_C8">C8</a></li><li class="seat_10 C"><a class="" onClick="selectSeat('row_C9');" seatid="17730" title="C9" id="row_C9">C9</a></li><li class="seat_11 C"><a class="" onClick="selectSeat('row_C10');" seatid="17731" title="C10" id="row_C10">C10</a></li><li class="seat_12 C"><a class="" onClick="selectSeat('row_C11');" seatid="17732" title="C11" id="row_C11">C11</a></li><li class="seat_13 C"><a class="" onClick="selectSeat('row_C12');" seatid="17733" title="C12" id="row_C12">C12</a></li><li class="seat_14 C"><a class="" onClick="selectSeat('row_C13');" seatid="17734" title="C13" id="row_C13">C13</a></li><li class="seat_15 C"><a class="" onClick="selectSeat('row_C14');" seatid="17735" title="C14" id="row_C14">C14</a></li><li class="seat_16 C"><a class="" onClick="selectSeat('row_C15');" seatid="17736" title="C15" id="row_C15">C15</a></li><li class="seat_17 C"><a class="" onClick="selectSeat('row_C16');" seatid="17737" title="C16" id="row_C16">C16</a></li><li class="seat_18 C"><a class="" onClick="selectSeat('row_C17');" seatid="17738" title="C17" id="row_C17">C17</a></li><li class="seat_19 C"><a class="" onClick="selectSeat('row_C18');" seatid="17739" title="C18" id="row_C18">C18</a></li><li class="seat_20 C"><a class="" onClick="selectSeat('row_C19');" seatid="17740" title="C19" id="row_C19">C19</a></li><li class="seat_21 C"><a class="" onClick="selectSeat('row_C20');" seatid="17741" title="C20" id="row_C20">C20</a></li><li class="seat_22 C"><a class="" onClick="selectSeat('row_C21');" seatid="17742" title="C21" id="row_C21">C21</a></li><li class="seat_23 C"><a class="" onClick="selectSeat('row_C22');" seatid="17743" title="C22" id="row_C22">C22</a></li><li class="seat_24 C"><a class="" onClick="selectSeat('row_C23');" seatid="17744" title="C23" id="row_C23">C23</a></li><li class="seat_26 C"><a class="" onClick="selectSeat('row_C24');" seatid="17745" title="C24" id="row_C24">C24</a></li><li class="seat_27 C"><a class="" onClick="selectSeat('row_C25');" seatid="17746" title="C25" id="row_C25">C25</a></li><li class="seat_28 C"><a class="" onClick="selectSeat('row_C26');" seatid="17747" title="C26" id="row_C26">C26</a></li><li class="seat_29 C"><a class="" onClick="selectSeat('row_C27');" seatid="17748" title="C27" id="row_C27">C27</a></li><li class="seat_30 C"><a class="" onClick="selectSeat('row_C28');" seatid="17749" title="C28" id="row_C28">C28</a></li><li class="seat_31 C"><a class="" onClick="selectSeat('row_C29');" seatid="17750" title="C29" id="row_C29">C29</a></li><li class="seat_01 D"><a class="" onClick="selectSeat('row_D1');" seatid="17751" title="D1" id="row_D1">D1</a></li><li class="seat_02 D"><a class="" onClick="selectSeat('row_D2');" seatid="17752" title="D2" id="row_D2">D2</a></li><li class="seat_03 D"><a class="" onClick="selectSeat('row_D3');" seatid="17753" title="D3" id="row_D3">D3</a></li><li class="seat_04 D"><a class="" onClick="selectSeat('row_D4');" seatid="17754" title="D4" id="row_D4">D4</a></li><li class="seat_05 D"><a class="" onClick="selectSeat('row_D5');" seatid="17755" title="D5" id="row_D5">D5</a></li><li class="seat_06 D"><a class="" onClick="selectSeat('row_D6');" seatid="17756" title="D6" id="row_D6">D6</a></li><li class="seat_08 D"><a class="" onClick="selectSeat('row_D7');" seatid="17757" title="D7" id="row_D7">D7</a></li><li class="seat_09 D"><a class="" onClick="selectSeat('row_D8');" seatid="17758" title="D8" id="row_D8">D8</a></li><li class="seat_10 D"><a class="" onClick="selectSeat('row_D9');" seatid="17759" title="D9" id="row_D9">D9</a></li><li class="seat_11 D"><a class="" onClick="selectSeat('row_D10');" seatid="17760" title="D10" id="row_D10">D10</a></li><li class="seat_12 D"><a class="" onClick="selectSeat('row_D11');" seatid="17761" title="D11" id="row_D11">D11</a></li><li class="seat_13 D"><a class="" onClick="selectSeat('row_D12');" seatid="17762" title="D12" id="row_D12">D12</a></li><li class="seat_14 D"><a class="" onClick="selectSeat('row_D13');" seatid="17763" title="D13" id="row_D13">D13</a></li><li class="seat_15 D"><a class="" onClick="selectSeat('row_D14');" seatid="17764" title="D14" id="row_D14">D14</a></li><li class="seat_16 D"><a class="" onClick="selectSeat('row_D15');" seatid="17765" title="D15" id="row_D15">D15</a></li><li class="seat_17 D"><a class="" onClick="selectSeat('row_D16');" seatid="17766" title="D16" id="row_D16">D16</a></li><li class="seat_18 D"><a class="" onClick="selectSeat('row_D17');" seatid="17767" title="D17" id="row_D17">D17</a></li><li class="seat_19 D"><a class="" onClick="selectSeat('row_D18');" seatid="17768" title="D18" id="row_D18">D18</a></li><li class="seat_20 D"><a class="" onClick="selectSeat('row_D19');" seatid="17769" title="D19" id="row_D19">D19</a></li><li class="seat_21 D"><a class="" onClick="selectSeat('row_D20');" seatid="17770" title="D20" id="row_D20">D20</a></li><li class="seat_22 D"><a class="" onClick="selectSeat('row_D21');" seatid="17771" title="D21" id="row_D21">D21</a></li><li class="seat_23 D"><a class="" onClick="selectSeat('row_D22');" seatid="17772" title="D22" id="row_D22">D22</a></li><li class="seat_26 D"><a class="" onClick="selectSeat('row_D23');" seatid="17773" title="D23" id="row_D23">D23</a></li><li class="seat_27 D"><a class="" onClick="selectSeat('row_D24');" seatid="17774" title="D24" id="row_D24">D24</a></li><li class="seat_28 D"><a class="" onClick="selectSeat('row_D25');" seatid="17775" title="D25" id="row_D25">D25</a></li><li class="seat_29 D"><a class="" onClick="selectSeat('row_D26');" seatid="17776" title="D26" id="row_D26">D26</a></li><li class="seat_30 D"><a class="" onClick="selectSeat('row_D27');" seatid="17777" title="D27" id="row_D27">D27</a></li><li class="seat_31 D"><a class="" onClick="selectSeat('row_D28');" seatid="17778" title="D28" id="row_D28">D28</a></li><li class="seat_01 E"><a class="" onClick="selectSeat('row_E1');" seatid="17779" title="E1" id="row_E1">E1</a></li><li class="seat_02 E"><a class="" onClick="selectSeat('row_E2');" seatid="17780" title="E2" id="row_E2">E2</a></li><li class="seat_03 E"><a class="" onClick="selectSeat('row_E3');" seatid="17781" title="E3" id="row_E3">E3</a></li><li class="seat_04 E"><a class="" onClick="selectSeat('row_E4');" seatid="17782" title="E4" id="row_E4">E4</a></li><li class="seat_05 E"><a class="" onClick="selectSeat('row_E5');" seatid="17783" title="E5" id="row_E5">E5</a></li><li class="seat_06 E"><a class="" onClick="selectSeat('row_E6');" seatid="17784" title="E6" id="row_E6">E6</a></li><li class="seat_08 E"><a class="" onClick="selectSeat('row_E7');" seatid="17785" title="E7" id="row_E7">E7</a></li><li class="seat_09 E"><a class="" onClick="selectSeat('row_E8');" seatid="17786" title="E8" id="row_E8">E8</a></li><li class="seat_10 E"><a class="" onClick="selectSeat('row_E9');" seatid="17787" title="E9" id="row_E9">E9</a></li><li class="seat_11 E"><a class="" onClick="selectSeat('row_E10');" seatid="17788" title="E10" id="row_E10">E10</a></li><li class="seat_12 E"><a class="" onClick="selectSeat('row_E11');" seatid="17789" title="E11" id="row_E11">E11</a></li><li class="seat_13 E"><a class="" onClick="selectSeat('row_E12');" seatid="17790" title="E12" id="row_E12">E12</a></li><li class="seat_14 E"><a class="" onClick="selectSeat('row_E13');" seatid="17791" title="E13" id="row_E13">E13</a></li><li class="seat_15 E"><a class="" onClick="selectSeat('row_E14');" seatid="17792" title="E14" id="row_E14">E14</a></li><li class="seat_16 E"><a class="" onClick="selectSeat('row_E15');" seatid="17793" title="E15" id="row_E15">E15</a></li><li class="seat_17 E"><a class="" onClick="selectSeat('row_E16');" seatid="17794" title="E16" id="row_E16">E16</a></li><li class="seat_18 E"><a class="" onClick="selectSeat('row_E17');" seatid="17795" title="E17" id="row_E17">E17</a></li><li class="seat_19 E"><a class="" onClick="selectSeat('row_E18');" seatid="17796" title="E18" id="row_E18">E18</a></li><li class="seat_20 E"><a class="" onClick="selectSeat('row_E19');" seatid="17797" title="E19" id="row_E19">E19</a></li><li class="seat_21 E"><a class="" onClick="selectSeat('row_E20');" seatid="17798" title="E20" id="row_E20">E20</a></li><li class="seat_22 E"><a class="" onClick="selectSeat('row_E21');" seatid="17799" title="E21" id="row_E21">E21</a></li><li class="seat_23 E"><a class="" onClick="selectSeat('row_E22');" seatid="17800" title="E22" id="row_E22">E22</a></li><li class="seat_26 E"><a class="" onClick="selectSeat('row_E23');" seatid="17801" title="E23" id="row_E23">E23</a></li><li class="seat_27 E"><a class="" onClick="selectSeat('row_E24');" seatid="17802" title="E24" id="row_E24">E24</a></li><li class="seat_28 E"><a class="" onClick="selectSeat('row_E25');" seatid="17803" title="E25" id="row_E25">E25</a></li><li class="seat_29 E"><a class="" onClick="selectSeat('row_E26');" seatid="17804" title="E26" id="row_E26">E26</a></li><li class="seat_30 E"><a class="" onClick="selectSeat('row_E27');" seatid="17805" title="E27" id="row_E27">E27</a></li><li class="seat_31 E"><a class="" onClick="selectSeat('row_E28');" seatid="17806" title="E28" id="row_E28">E28</a></li><li class="seat_01 F"><a class="" onClick="selectSeat('row_F1');" seatid="17807" title="F1" id="row_F1">F1</a></li><li class="seat_02 F"><a class="" onClick="selectSeat('row_F2');" seatid="17808" title="F2" id="row_F2">F2</a></li><li class="seat_03 F"><a class="" onClick="selectSeat('row_F3');" seatid="17809" title="F3" id="row_F3">F3</a></li><li class="seat_04 F"><a class="" onClick="selectSeat('row_F4');" seatid="17810" title="F4" id="row_F4">F4</a></li><li class="seat_05 F"><a class="" onClick="selectSeat('row_F5');" seatid="17811" title="F5" id="row_F5">F5</a></li><li class="seat_06 F"><a class="" onClick="selectSeat('row_F6');" seatid="17812" title="F6" id="row_F6">F6</a></li><li class="seat_08 F"><a class="" onClick="selectSeat('row_F7');" seatid="17813" title="F7" id="row_F7">F7</a></li><li class="seat_09 F"><a class="" onClick="selectSeat('row_F8');" seatid="17814" title="F8" id="row_F8">F8</a></li><li class="seat_10 F"><a class="" onClick="selectSeat('row_F9');" seatid="17815" title="F9" id="row_F9">F9</a></li><li class="seat_11 F"><a class="" onClick="selectSeat('row_F10');" seatid="17816" title="F10" id="row_F10">F10</a></li><li class="seat_12 F"><a class="" onClick="selectSeat('row_F11');" seatid="17817" title="F11" id="row_F11">F11</a></li><li class="seat_13 F"><a class="" onClick="selectSeat('row_F12');" seatid="17818" title="F12" id="row_F12">F12</a></li><li class="seat_14 F"><a class="" onClick="selectSeat('row_F13');" seatid="17819" title="F13" id="row_F13">F13</a></li><li class="seat_15 F"><a class="" onClick="selectSeat('row_F14');" seatid="17820" title="F14" id="row_F14">F14</a></li><li class="seat_16 F"><a class="" onClick="selectSeat('row_F15');" seatid="17821" title="F15" id="row_F15">F15</a></li><li class="seat_17 F"><a class="" onClick="selectSeat('row_F16');" seatid="17822" title="F16" id="row_F16">F16</a></li><li class="seat_18 F"><a class="" onClick="selectSeat('row_F17');" seatid="17823" title="F17" id="row_F17">F17</a></li><li class="seat_19 F"><a class="" onClick="selectSeat('row_F18');" seatid="17824" title="F18" id="row_F18">F18</a></li><li class="seat_20 F"><a class="" onClick="selectSeat('row_F19');" seatid="17825" title="F19" id="row_F19">F19</a></li><li class="seat_21 F"><a class="" onClick="selectSeat('row_F20');" seatid="17826" title="F20" id="row_F20">F20</a></li><li class="seat_22 F"><a class="" onClick="selectSeat('row_F21');" seatid="17827" title="F21" id="row_F21">F21</a></li><li class="seat_23 F"><a class="" onClick="selectSeat('row_F22');" seatid="17828" title="F22" id="row_F22">F22</a></li><li class="seat_26 F"><a class="" onClick="selectSeat('row_F23');" seatid="17829" title="F23" id="row_F23">F23</a></li><li class="seat_27 F"><a class="" onClick="selectSeat('row_F24');" seatid="17830" title="F24" id="row_F24">F24</a></li><li class="seat_28 F"><a class="" onClick="selectSeat('row_F25');" seatid="17831" title="F25" id="row_F25">F25</a></li><li class="seat_29 F"><a class="" onClick="selectSeat('row_F26');" seatid="17832" title="F26" id="row_F26">F26</a></li><li class="seat_30 F"><a class="" onClick="selectSeat('row_F27');" seatid="17833" title="F27" id="row_F27">F27</a></li><li class="seat_31 F"><a class="" onClick="selectSeat('row_F28');" seatid="17834" title="F28" id="row_F28">F28</a></li><li class="seat_01 G"><a class="" onClick="selectSeat('row_G1');" seatid="17835" title="G1" id="row_G1">G1</a></li><li class="seat_31 G"><a class="" onClick="selectSeat('row_G2');" seatid="17836" title="G2" id="row_G2">G2</a></li></ul><div id="confirm_div">
                  <input type="hidden" id="no_seats" name="no_seats" value="5" />
                  </div></div><br/>     </div>
</form>
</div>
<script>
var sec = jQuery('#timer').text()
    var timer = setInterval(function() {
    jQuery('#timer').text(--sec);
    if (sec <= 0) {       
      clearInterval(timer);
      window.location.replace('index.php?option=com_eapmovies&controller=buyticket&view=reservation&Itemid=156');
    }
    }, 1000);
</script>
          </div>
        </div>
                                        <div class="footer clearfix">
          <div class="grid_17" id="footer_menu">
            		<div class="moduletable">
					
<ul class="menu">
<li class="item-122"><a href="/" ><span><em>Home</em></span></a></li><li class="item-123"><a href="http://eapmovies.com/index.php?option=com_content&view=article&layout=edit&id=44&Itemid=123" ><span><em>Privacy Policy</em></span></a></li><li class="item-124"><a href="http://eapmovies.com/index.php?option=com_content&view=article&layout=edit&id=45&Itemid=124" ><span><em>Terms of Use</em></span></a></li><li class="item-125"><a href="http://eapmovies.com/index.php?option=com_content&view=article&layout=edit&id=43&Itemid=125" ><span><em>Disclaimer</em></span></a></li><li class="item-126"><a href="/about-us" ><span><em>About Us</em></span></a></li><li class="item-127"><a href="/contact-us" ><span><em>Contact Us</em></span></a></li></ul>
		</div>
	
          </div>
          <div class="grid_7" id="copyrights">© SORPIO.  All Rights Reserved.<br />
            Designed by <a href="http://www.archmage.lk">Archmage</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>