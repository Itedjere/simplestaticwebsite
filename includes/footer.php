<!-- get-in -->
<div id="contact" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h3>GET IN TOUCH</h3>
			<h4><i>Feel Free To Contact Us</i></h4>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
            <a href="contact.php">Contact Me</a>
		</div>
	</div>
</div>
<!-- //get-in -->

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
		 <p>Copyrights &copy; <?php echo date('Y'); ?> Emplox. All rights reserved | Designed by <a href="#">Websurer</a></p>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <!--<div class="arrow">
			 <a class="scroll" href="#home"><img src="assets/images/to-top1.png" alt=""></a>
		 </div>-->
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