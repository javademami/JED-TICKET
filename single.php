<?php
	session_start();
	if(!isset($_SESSION['user_login'])){
		echo "<script>alert('Please Login First');window.location='index.php';</script>";
	}
	require_once"admin/db/db_config.php";
	$movie_data = mysqli_fetch_array(select("select * from movies where moviesid='".$_REQUEST['moviesid']."'"));
?>
<!DOCTYPE html>
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
					<h3 class="w3l-inner-h-title"><?=$movie_data['movies_name']?></h3>
				</div>
				<div class="latest-news-agile-info text-center" >
					<div class="col-md-8 latest-news-agile-left-content">
						<img src="movies/<?=$movie_data['movies_image']?>" alt=" " class="img-responsive">
						<div class="single video_agile_player">
							<h4><?=$movie_data['movies_name']?> | Official </h4>
						</div>
						<div id="show">
							<?php include_once"movie_data.php";?>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--//content-inner-section-->
		<!--/footer-bottom-->
		<?php include_once"footer.php";?>
		<?php include_once"footer_scripts.php";?>
	</body>
	</html>	