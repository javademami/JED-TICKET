<?php
	session_start();
	require_once"admin/db/db_config.php";
?><!DOCTYPE html>
<html>
	<head>
		<title>Movies Pro | Home</title>
		<?php include_once"head_files.php";?>
		<?php include_once"header.php";?>
	</head>
	<body>
		<!--/main-header-->
		<!--/banner-section-->
		
		<!--/banner-section-->
		<!--//main-header-->
		<!--/banner-bottom-->
		<?php include_once"login-section.php";?>
		<!--/content-inner-section-->
		<div class="w3_content_agilleinfo_inner">
			<div class="agile_featured_movies">
				<div class="inner-agile-w3l-part-head">
					<h3 class="w3l-inner-h-title">Contact</h3>
					<p class="w3ls_head_para">Add short Description</p>
				</div>
				<div class="w3_mail_grids">
					<form action="#" method="post">
						<div class="col-md-6 w3_agile_mail_grid">
							<span class="input input--ichiro">
								<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="">
								<label class="input__label input__label--ichiro" for="input-25">
									<span class="input__label-content input__label-content--ichiro">Your Name</span>
								</label>
							</span>
							<span class="input input--ichiro">
								<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="">
								<label class="input__label input__label--ichiro" for="input-26">
									<span class="input__label-content input__label-content--ichiro">Your Email</span>
								</label>
							</span>
						<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="">
						<label class="input__label input__label--ichiro" for="input-27">
						<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
						</label>
						</span>
						</div>
						<div class="col-md-6 w3_agile_mail_grid two">
						<textarea name="Message" placeholder="Your Message" required=""></textarea>
						<input type="submit" value="Submit">
						</div>
						<div class="clearfix"> </div>
						</form>
						<div class="agileits-get-us">
						<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>Kanslivagen 17 Stockholm </li>
						<li><i class="fa fa-phone" aria-hidden="true"></i>  +46 720338575</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> javademami2030@gmail.com</a></li>
						</ul>
						</div>
						</div>
						</div>
						
						</div>
						<!--//content-inner-section-->
						<!--/footer-bottom-->
						<?php include_once"footer.php";?>
						<?php include_once"footer_scripts.php";?>
						</body>
						</html>						