<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emplox a Personal Portfolio Flat Bootstrap Responsive Website Template | Home :: softefix</title>
<!--Stylesheet For Bootstrap-->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<!--Stylesheet For This Page-->
<link href="assets/css/lecturer.css" rel="stylesheet" type="text/css" media="all" />


<meta name="viewport" content="width=device-width, initial-scale=1"/>

<meta name="keywords" content="Emplox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->

<script src="assets/js/jquery.min.js"></script>

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

<!--top-header-->
<div id="home" class="top-header">
	 <div class="container">
		 <div class="logo">
				<h1><a href="index.html">Emplox</a></h1>
		 </div>
		 <div class="top-menu">
			 <span class="menu"><img src="assets/images/nav-icon.png" alt=""/></span>
			 <ul>
				<li><a class="scroll" href="#home">Home</a></li>
				<li><a class="scroll" href="#about">About</a></li>
				<li><a class="scroll" href="#experience">Education</a></li>
				<li><a href="assignments.php">Assignments</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			 </ul>
		     <!-- script-for-menu -->
				 <script>					
							$("span.menu").click(function(){
								$(".top-menu ul").slideToggle("slow" , function(){
								});
							});
				 </script>
		     <!-- script-for-menu -->
		  </div>
	 </div>
</div>	
<!--header-->

<!-- banner -->
<div class="banner">
    <div class="container">
                <!-- banner Slider starts Here -->
                    <script src="assets/js/responsiveslides.min.js"></script>
                            <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                      // Slideshow 4
                      $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                          $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                          $('.events').append("<li>after event fired.</li>");
                        }
                      });
                
                    });
                  </script>
                <!--//End-slider-script-->
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="banner-info">
                            <h1>Job Searching Just Got So Easy</h1>
                            <p>Consectetur adipisicing elit, sed do lorem ipsum dolor sit amet,  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h1>Tempor incididunt ut labore</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h1>Consectetur adipisicing elit</h1>
                            <p>Eiusmod tempor incididunt lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </li>
                 </ul>
            </div>
            <div class="clearfix"> </div>
            <!-- banner Slider Ends Here --> 
    </div>
</div>
<!-- banner -->	

<!--about-->
<div class="about" id="about">
   <div class="container">
   <h3 class="tittle">About Me</h3>
      <div class="col-md-5 ab-grid pic">
      <img src="assets/images/ab.jpg" alt=" " title="ab">
      </div>
      <div class="col-md-7 ab-grid text">
        <h4>I am jessica, I live in Newyork. I am WP Theme Developer, UI/UX Developer, Internet Consultant.</h4>
        <p>We are a professional Software comapny with the best talent and most modern technology for online solutions & focused on providing clients with effective online marketing solutions.</p>
        <p>We focused on providing clients with effective online marketing solutions.</p>
        <p>I know 4 languages. Working on this field for 5+ years and got many design awards.</p>
         
      </div>
      <div class="clearfix"> </div>
   </div>
</div>	   
<!--//about-->

<!--experience-starts-->
<div class="experience" id="experience">
    <div class="container">
            <h3 class="tittle four">Education & Experience</h3>
            <div class="experience-main">
                <span class="devide-line"></span>
                <div class="experience-left">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    <h4>MASTER OF FINE ARTS</h4>
                    <h5>DESIGN UNIVERSITY [ 2011 - 2013 ]</h5>
                    <p>Sed a tortor sed ipsum porta iaculis id eget massa. Quisque imperdiet urna sed lorem facilisis, id imperdiet magna dignissim. Maecenas quis dui at magna ullamcorper suscipit.</p>
                </div>
                <div class="experience-left-snd">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                </div>
                <div class="experience-right-snd">
                    <h4>DESIGN CORPORATION</h4>
                    <h5>UX DEVELOPER [ 2013 - 2014 ]</h5>
                    <p>Lorem ipsum dolor sit amet, rebum dolore labores cu pri. Ferri iudico scripta ut eam, diceret euismod gubergren has eu, an quo tale vivendum. Ad quidam gubergren vituperatoribus sit.</p>
                </div>
                <div class="experience-left-trd">
                    <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                    <h4>CREATIVE DESIGN STUDIO</h4>
                    <h5>UX DEVELOPER [ 2016 - 2018 ]</h5>
                    <p>Morbi porta eros diam, vel dictum mauris tristique cursus. Curabitur at feugiat nulla. Morbi facilisis vulputate ligula non dignissim. Nunc sagittis non tellus eu hendrerit.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
    </div>
</div>
<!--experience-end-->

<!---->
<div id="blog" class="blog">
	 <div class="container">
		 <h3>Blog</h3>
		 <div class="blog-grids">
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="assets/images/b1.jpg" class="img-responsive" alt=""/></a> 
				 <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
					<span>Mar 12 | 2015</span>
				 <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et. Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante interdum iaculis urna sapien.</p>				 
			 </div>
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="assets/images/b2.jpg" class="img-responsive" alt=""/> </a> 
				 <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
					<span>Mar 12 | 2015</span>
				 <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et. Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante interdum iaculis urna sapien.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->	

<?php include_once('includes/footer.php'); ?>