<!--
Au<!--
Author: softefix
Author URL: http://softefix.com.ng
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Emplox a Personal Portfolio Flat Bootstrap Responsive Website Template | Home :: softefix</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/lecturer.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Emplox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<script src="assets/js/jquery.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--scrolling-->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--scrolling-->
</head>

<body>
<?php include_once('includes/header.php'); ?>
<!-- get-in -->
<!--<div id="contact" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h3>GET IN TOUCH</h3>
			<h4><i>Feel Free To Contact Us</i></h4>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>
	</div>
</div>-->
<!-- //get-in -->

<div class="contact_desc" id="contact">
    <div class="container">
        <h3 class="tittle no-bottom-magin">Contact Me</h3>
         <div class="contact-form">
         <form>
           <div class="left_form">
                <div>
                    <span><label>NAME</label></span>
                    <span><input name="userName" type="text" class="textbox"></span>
                </div>
                <div>
                    <span><label>E-MAIL</label></span>
                    <span><input name="userEmail" type="text" class="textbox"></span>
                </div>
                <div>
                    <span><label>Fax</label></span>
                    <span><input name="userPhone" type="text" class="textbox"></span>
                </div>
            </div>
            <div class="right_form">
                <div>					    	
                    <span><label>SUBJECT</label></span>
                    <span><textarea name="userMsg"> </textarea></span>
                </div>
               <div>
                    <input type="submit" value="Submit " />
              </div>
            </div>
            <div class="clearfix"></div>
            </form>
      </div>
      </div>
</div>

<!-- contact-us -->
<div class="contact-us">
	<div class="container">
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
				<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
				<p><a href="mailto:info@example.com">rudhisasmito@gmail.com</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
				<p>+613 0000 0000</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact-us -->

<div class="footer">
	 <div class="container">
		 <p>Copyrights ?? 2015 Emplox. All rights reserved | Template by <a href="http://softefix.com.ng/">softefix</a></p>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="arrow">
			 <a class="scroll" href="#home"><img src="images/top.png" alt=""></a>
		 </div>
	 </div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>