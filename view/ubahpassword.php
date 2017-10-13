<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SISTEM INFORMASI ORMAWA</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="<?php echo URL; ?>public/assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="<?php echo URL; ?>public/assets/skin/default.css">
        <!-- =======================================================
            Theme Name: Amoeba
            Theme URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>
	 
    <body>
		
		<!-- contact -->
		<section id="section-login" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">UBAH PASSWORD</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<form action="<?php echo URL; ?>login/ubah" method="post" role="form" class="contactForm">
							  

							  <div class="form-group col-md-8" style="left:17%;" >
								<label for="name">Password Baru</label>
								<input type="password" name="passbaru" class="form-control" id="name" placeholder="Password Baru" required/>
							  </div>

							  <div class="form-group col-md-8" style="left:17%;">
								<label for="name">Masukkan Kembali Password Baru</label>
								<input type="password" name="repassbaru" class="form-control" id="password" placeholder="Password Baru" required />
							  </div>

							  <input type="hidden" name="iduser" class="form-control" value="<?php echo $this->id; ?>" />

							  <!--
							  <div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div> -->
							  <div class="form-group col-md-8" style="left:17%;">
							  <button type="submit" class="btn btn-theme pull-left">UBAH PASSWORD</button>
							  </div>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
		</section>
		<!-- map -->
		<section id="section-map" class="clearfix">
            <!--<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
		</section>
		
	
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="<?php echo URL; ?>public/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo URL; ?>public/assets/js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.isotope.min.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.nicescroll.min.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/skrollr.min.js"></script>		
	<script src="<?php echo URL; ?>public/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/stellar.js"></script>
	<script src="<?php echo URL; ?>public/assets/js/jquery.appear.js"></script>
    <script src="<?php echo URL; ?>public/assets/js/main.js"></script>
    <script src="<?php echo URL; ?>public/contactform/contactform.js"></script>
    
	</body>
</html>