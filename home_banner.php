<?php $q = select("select * from slider"); while($slides = mysqli_fetch_array($q)) {  extract($slides); $paths[] = '"images/slides/'.$path.'"'; } $silder_paths = implode($paths,",");  ?>
	<div id="demo-1" data-zs-src='[
	<?=$silder_paths?> ]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span>J</span>ED <span>T</span>ICKET</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							
							<li><a href="contact.php">Contact</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
					<div class="w3ls_search">
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
										</ul> <!-- cd-header-buttons -->
									</div>
									<div id="cd-search" class="cd-search">
										<form action="#" method="post">
											<input name="Search" type="search" placeholder="Search...">
										</form>
									</div>
								</div>
	
			</div> 

			   </div>
		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="baner-info">
			      <h3> <span>B</span>ook <span>O</span>nline  <span>M</span>ovies </h3>
				  <h4>In space no one can hear you scream.</h4>
				  <a class="w3_play_icon1">
											Book Now
										</a>
			   </div>
			<!--/banner-ingo-->		
		</div>
    </div>