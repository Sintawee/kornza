<?php
ob_start();
session_start();
require_once("main.php");
$PHP_SELF = "index.php"; 
?>
<!doctype html>
<html class="no-js">

	<head>
              
		<meta charset="utf-8"/>
		<title>Travel Agency</title>
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		<LINK href="favicon.ico" 
         rel="SHORTCUT ICON">
		
		<!-- JS -->
		<script src="js/jquery-1.6.4.min.js"></script>
		
		
		
		<!-- Masonry -->
		<script src="js/masonry.min.js" ></script>
		<script src="js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
	
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
			
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
		
	
		
		
		<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6-hacks.css" media="screen" />
		<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="css/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>



<!-- part2 -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

<script type="text/javascript">

 $(document).ready(function() {
/*
* In-Field Label jQuery Plugin
* http://fuelyourcoding.com/scripts/infield.html
*
* Copyright (c) 2009 Doug Neiner
* Dual licensed under the MIT and GPL licenses.
* Uses the same license as jQuery, see:
* http://docs.jquery.com/License
*
* @version 0.1
*/
(function($) { $.InFieldLabels = function(label, field, options) { var base = this; base.$label = $(label); base.$field = $(field); base.$label.data("InFieldLabels", base); base.showing = true; base.init = function() { base.options = $.extend({}, $.InFieldLabels.defaultOptions, options); base.$label.css('position', 'absolute'); var fieldPosition = base.$field.position(); base.$label.css({ 'left': fieldPosition.left, 'top': fieldPosition.top }).addClass(base.options.labelClass); if (base.$field.val() != "") { base.$label.hide(); base.showing = false; }; base.$field.focus(function() { base.fadeOnFocus(); }).blur(function() { base.checkForEmpty(true); }).bind('keydown.infieldlabel', function(e) { base.hideOnChange(e); }).change(function(e) { base.checkForEmpty(); }).bind('onPropertyChange', function() { base.checkForEmpty(); }); }; base.fadeOnFocus = function() { if (base.showing) { base.setOpacity(base.options.fadeOpacity); }; }; base.setOpacity = function(opacity) { base.$label.stop().animate({ opacity: opacity }, base.options.fadeDuration); base.showing = (opacity > 0.0); }; base.checkForEmpty = function(blur) { if (base.$field.val() == "") { base.prepForShow(); base.setOpacity(blur ? 1.0 : base.options.fadeOpacity); } else { base.setOpacity(0.0); }; }; base.prepForShow = function(e) { if (!base.showing) { base.$label.css({ opacity: 0.0 }).show(); base.$field.bind('keydown.infieldlabel', function(e) { base.hideOnChange(e); }); }; }; base.hideOnChange = function(e) { if ((e.keyCode == 16) || (e.keyCode == 9)) return; if (base.showing) { base.$label.hide(); base.showing = false; }; base.$field.unbind('keydown.infieldlabel'); }; base.init(); }; $.InFieldLabels.defaultOptions = { fadeOpacity: 0.5, fadeDuration: 300, labelClass: 'infield' }; $.fn.inFieldLabels = function(options) { return this.each(function() { var for_attr = $(this).attr('for'); if (!for_attr) return; var $field = $("input#" + for_attr + "[type='text']," + "input#" + for_attr + "[type='password']," + "input#" + for_attr + "[type='tel']," + "input#" + for_attr + "[type='email']," + "textarea#" + for_attr); if ($field.length == 0) return; (new $.InFieldLabels(this, $field[0], options)); }); }; })(jQuery);


    $("#RegisterUserForm label").inFieldLabels();
});

</script>

<style type="text/css">

/* Add whatever you need to your CSS reset */
html, body, h1, form, fieldset, input {
  margin: 0;
  padding: 0;
  border: none;
  }

body { font-family: Helvetica, Arial, sans-serif; font-size: 12px; }

        #registration {
			color: #fff;
            background: #2d2d2d;
            background: -webkit-gradient(
                            linear,
                            left bottom,
                            left top,
                            color-stop(0, rgb(60,60,60)),
                            color-stop(0.74, rgb(43,43,43)),
                            color-stop(1, rgb(60,60,60))
                        );
            background: -moz-linear-gradient(
                            center bottom,
                            rgb(60,60,60) 0%,
                            rgb(43,43,43) 74%,
                            rgb(60,60,60) 100%
                        );
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
			border-radius: 10px;
            margin: 0px;
			width: 255px;
            }

 #registration a {
      color: #8c910b;
      text-shadow: 0px -1px 0px #000;
      }
	  
#registration fieldset {
      padding: 20px;
      }
	  
input.text {
      font-size: 14px;
      width: 90%;
      padding: 7px 8px 7px 30px;
      -moz-box-shadow: 0px 1px 0px #777;
      -webkit-box-shadow: 0px 1px 0px #777;
	  background: #fff url('img/inputSprite.png') no-repeat 4px 5px;
	  background: url('img/inputSprite.png') no-repeat 4px 5px, -moz-linear-gradient(
           center bottom,
           rgb(225,225,225) 0%,
           rgb(215,215,215) 54%,
           rgb(173,173,173) 100%
           );
	  background:  url('img/inputSprite.png') no-repeat 4px 5px, -webkit-gradient(
          linear,
          left bottom,
          left top,
          color-stop(0, rgb(215,215,215)),
          color-stop(0.54, rgb(215,215,215)),
          color-stop(1, rgb(215,215,215))
          );
      color:#333;
      text-shadow:0px 1px 0px #FFF;
}	  

 input#email { 
 	background-position: 4px 5px; 
	background-position: 4px 5px, 0px 0px;
	}
	
 input#password { 
 	background-position: 4px -20px; 
	background-position: 4px -20px, 0px 0px;
	}
	
 input#name { 
 	background-position: 4px -46px; 
	background-position: 4px -46px, 0px 0px; 
	}
	
 input#tel { 
 	background-position: 4px -76px; 
	background-position: 4px -76px, 0px 0px; 
	}
	
#registration h2 {
	color: #fff;
	text-shadow: 0px -1px 0px #000;
	border-bottom: solid #181818 1px;
	-moz-box-shadow: 0px 1px 0px #3a3a3a;
	text-align: center;
	padding: 10px;
	margin: 0px;
	font-weight: normal;
	font-size: 22px;
	font-family: Lucida Grande, Helvetica, Arial, sans-serif;
	}
	
#registerNew {
	width: 140px;
	height: 35px;
	border: none;
	text-indent: -9999px;
	background: url('img/accountbutton.png') no-repeat;
	cursor: pointer;
	float: right;
	}
 #registration p {
      position: relative;
      }
	  
fieldset label.infield /* .infield label added by JS */ {
    color: #333;
    text-shadow: 0px 1px 0px #fff;
    position: absolute;
    text-align: left;
    top: 3px !important;
    left: 35px !important;
    line-height: 29px;
    }

.f {font-family: "Century Gothic";
	font-size: 14px;
	color: #000;
}
.fadd {font-size: 11px;
	color: #333;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.fblue {font-family: "Century Gothic";
	font-size: 14px;
	color: #000099;
}
.fred {font-family: "Century Gothic";
	font-size: 14px;
	color: #CC0000;
}
.frontb {font-size: 12px;
	color: #000000;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.frontr {font-size: 12px;
	color: #D52B00;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
</style>





	</head>
	
	<body lang="en">
	

	        	
	        		
		<!-- mobile-nav -->
	<div id="mobile-nav-holder">
	  <div class="wrapper">
				<ul id="mobile-nav">
					<li><a href="index.html">home</a></li>
					<li><a href="blog.html">blog</a></li>
					<li class="current-menu-item"><a href="page.html">about</a>
						<ul>
							<li><a href="page-full.html">Fullwidth Page</a></li>
							<li><a href="page-features.html">Features</a></li>
							<li><a href="page-typography.html">Typography</a></li>
							<li><a href="page-icons.html">Icons</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">portfolio</a></li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="http://luiszuno.com/blog/downloads/modus-html-template">Grab it!</a></li>
				</ul>
				<div id="nav-open"><a href="#">Menu</a></div>
			</div>
		</div>
		<!-- ENDS mobile-nav -->
			
		<header>
			
				
			<div class="wrapper">
					
								
				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="index.htm">Home</a></li>
						<li><a href="companyprofile.htm">Company Profile</a></li>
						<li><a href="ourservice.htm">Our Service</a></li>
						<li><a href="termscondition.htm">Terms and Conditions</a></li>
						<li><a href="contactus.htm">Contact Us</a></li>
                        <li><a href="registerform.htm">Register Online</a></li>
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
	</header>
	
	
	
	
		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="https://www.facebook.com/pages/Bangkok-Tours-Travel/351772999249?ref=tn_tnmn"  title="Become a fan"><img src="img/social/facebook_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.youtube.com/user/diningbazaar" title="Follow my tweets"><img src="img/social/youtube_32.png"  alt="Facebook" /></a></li>
					
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
			<!-- masthead --><!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content1">
	        						
	        		                    
<div id="registration">
 <h2>Partner Login</h2>
<?php
     if(!$_SESSION['user']){
?>
 <form id="RegisterUserForm" action="index.php?act=login" method="post">
 	<fieldset>
         <p>
            <label for="tel">Username</label>
            <input id="tel" name="tel" type="tel" class="text"/>
         </p>
        
         <p>
            <label for="password">Password</label>
            <input id="password" name="password" class="text" type="password" />
         </p>
        
         <p><input id="acceptTerms" name="acceptTerms" type="checkbox" />
            <label for="acceptTerms">
                I agree to the Terms and Conditions and Privacy Policy
            </label>
         </p>
        
         <p>
            <button id="registerNew" type="submit">Register</button>
         </p>
 	</fieldset>

 </form>
</div><?php }else {?>
 <form id="RegisterUserForm" action="index.php?act=logout" method="post">
 	<fieldset>
         <p>
             <label for="tel" class="text">Company's name</label><?= $_SESSION['company_name'];?>
         </p>
         <p>
            <label for="tel">Username</label><?= $_SESSION['contact_Person'];?>
         </p>
         <p>
             <button  type="submit" >Logout</button>
         </p>
 	</fieldset>

 </form>
</div>  
<?php } ?>
    
	        	</div>
                
                
                <div id="page-content2">
	        						
	        		
				  <h1>Home</h1>
                  <br>
                  <div align="justify">Welcome to Sunleisureworld.net (A B2B platform by Sun Leisure World Corporation)
Sun Leisure World (SLW) is a B2B online travel distribution system exclusively designed for travel agents, hotel and other travel suppliers. 
The system enables travel agents to book hot deal hotel, tours, and transfer and sightseeing services in Thailand with an instant confirmation at anytime, anywhere, eliminating the need of fax and email for requesting information and asking for price than getting a confirmation. 
It also allows our travel partner to book, amend, cancel tours or transfer instantly 24 hours a day, 7 days a week. 
Sunleisureworld.net also empowers our travel partner to generate his own voucher with his name and logo thus claiming the best customized system in modern time. 
In addition to that we also have the “Flash Deal” for hotels and resorts which flash the slash rates hotels of different city in the town thus making us a unique product in the total travel industry market. 
SLW provides 100’s of tours and transfer rate in and around Thailand with a competitive rate, our contract department and product department is working hard to get all innovative available tours in Thailand with an excellent rate. So do not wait to experience the sophisticated technology which will give you an edge over other travel agencies by operating a maximum efficiency. 
So MAXIMISE YOUR TRAVEL EXPERIENCE.</div>
                </div>
                
                
	        	<!-- ENDS page content -->
	        	
	        	<!-- sidebar -->
	        	
                <div id="page-content3">
                
                <aside id="headsidebar">
	        		<div class="block">
		        		<h2 class="toggle-trigger">RECOMMENDED HOTELS</h2>
        		  </div>	        	
        	  </aside>
                
                
              <aside id="sidebar1">
	        		<div class="block"><img src="images/sivatel.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar2">
	        		<div class="block"><img src="images/infinity.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar3">
	        		<div class="block"><img src="images/thezign.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar4">
	        		<div class="block"><img src="images/patonglodge.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="headsidebar">
	        		<div class="block">
		        		<h2 class="toggle-trigger">SPECIAL PROMOTIONS</h2>
	        		</div>	        	
        	  </aside>
                
                
              <aside id="sidebar1">
	        		<div class="block"><img src="images/tourpoppular1.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar2">
	        		<div class="block"><img src="images/tourpoppular2.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar3">
	        		<div class="block"><img src="images/tourpoppular3.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              
              <aside id="sidebar4">
	        		<div class="block"><img src="images/tourpoppular4.jpg" width="110" height="110"  alt=""/>
		        		
	        		</div>	        	
        	  </aside>
              
              </div>
              
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
	</div>
		<!-- ENDS MAIN -->
		
		<footer>
		
          
          
          <div id="dyt-footer">
                

<article id="footer-column">
    	<h3>Our Website</h3>
         <a href="http://www.sunleisureworld.com">www.sunleisureworld.com</a><br>
      	 <a href="http://www.sightseeingbangkok.com">www.sightseeingbangkok.com</a><br>
	  	 <a href="http://www.sightseeingpattaya.com">www.sightseeingpattaya.com</a><br>
	  	 <a href="http://www.sightseeingphuket.com">www.sightseeingphuket.com</a><br>
	  	 <a href="http://www.sightseeingchiangmai.com">www.sightseeingchiangmai.com</a><br>
      	 <a href="http://www.sightseeingsamui.com">www.sightseeingsamui.com</a><br>
         


<article id="footer-link">
    	<a href="" title="archives">HOME</a></article>
</article>


<article id="footer-column1">
    	<h3>Our Links</h3>
        <a href="disclaimer.htm">Disclaimer</a><br>
		<a href="privacy.htm">Privacy Policy</a><br>
		<a href="license.htm">License and Approval</a></article>


<article id="footer-column2">
    	<h3><span class="fadd"><span class="fred"><strong>SUN</strong></span><strong> <span class="fblue">LEISUREWORLD</span> <span class="f">CORPORATION</span></strong></span></h3>
        
        <div>
          <div align="left">293/118 Sukhnivat-2, Pracha Uthit 69, Pracha Uthit Road, Thung Kru, 
            Bangmod, Bangkok - 10140
            <br>
            Sightseeing Tour Contact Number:- +66 8 1440 9926, 
            E-mail : rsvn@sunleisureworld.com 
            Inbound Package Department Contact Number:-<br>
+66 8 1583 6668, 
            E-mail : group@sunleisureworld.com, 
            for update tours & hotel into the website:- admin@sunleisureworld.com 
            Thailand:- +662 817 2294; Fax:- +662 817 2294,
            info@sunleisureworld.com / www.sunleisureworld.com</div>
      </div>
      <div id="footer-column3">
        
       <img src="icon/ttt.png" width="66" height="54"  alt=""/> &nbsp;<img src="icon/amazing.png" width="122" height="34"  alt=""/> &nbsp;<img src="icon/creditcard.png" width="91" height="28"  alt=""/> &nbsp;<img src="icon/verisign.png" width="77" height="32"  alt=""/></div>
        
    </article>

          </div>
          <div class="clearfix"></div>
				
				

<div id="dyt-wrap">
<div>

        <div>HOME : BANGKOK : PATTAYA : PHUKET : CHIANGMAI : KOH SAMUI : KRABI &nbsp; &copy; www.sunleisureworld.net</div>

</div>
</div>

					
		
	</footer>
		
</body>
	
</html>
