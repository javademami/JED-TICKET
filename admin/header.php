<nav class="navbar-default navbar-static-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<h1> <a class="navbar-brand" href="index.php">JED Ticket</a></h1>
	</div>
	<div class=" border-bottom">
		<div class="full-left">
			<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
			<!--<form class=" navbar-left-right">
				<input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
				<input type="submit" value="" class="fa fa-search">
			</form>-->
			<div class="clearfix"> </div>
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<!-- Collect the nav links, forms, and other content for toggling -->
		
		<div class="drop-men" >
			<ul class=" nav_1">
			<!--	<li class="dropdown at-drop">
					<a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
					<ul class="dropdown-menu menu1 " role="menu">
						<li><a href="#">
							<div class="user-new">
								<p>New user registered</p>
								<span>40 seconds ago</span>
							</div>
							<div class="user-new-left">
								<i class="fa fa-user-plus"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>Someone special liked this</p>
								<span>3 minutes ago</span>
							</div>
							<div class="user-new-left">
								<i class="fa fa-heart"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>John cancelled the event</p>
								<span>4 hours ago</span>
							</div>
							<div class="user-new-left">
								<i class="fa fa-times"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>The server is status is stable</p>
								<span>yesterday at 08:30am</span>
							</div>
							<div class="user-new-left">
								<i class="fa fa-info"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>New comments waiting approval</p>
								<span>Last Week</span>
							</div>
							<div class="user-new-left">
								<i class="fa fa-rss"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#" class="view">View all messages</a></li>
					</ul>
				</li>
				-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?=ucwords($_SESSION['username']);?><i class="caret"></i></span>
					<img src="images/<?php if(empty($_SESSION['userimage'])) echo "users.png"; else echo $_SESSION['userimage']; ?>" style="border-radius: 50%;"></a>
					<ul class="dropdown-menu " role="menu">
						<li><a href="change_password.php"><i class="fa fa-edit"></i>Setting</a></li>
						<li><a href="change_profile_pic.php"><i class="fa fa-image"></i>Profile Picture</a></li>
						<li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<!-- /.navbar-collapse -->
		<div class="clearfix">
		</div>
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
					</li>
					<li>
						<a href="change_password.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Change Password</span> </a>
					</li>
					<li>
						<a href="change_profile_pic.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Change Profile Picture</span> </a>
					</li>
					
					<li>
						<a href="view_orders.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Bookings</span> </a>
					</li>
					<li>
						<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Ticket Package</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="add_package.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Ticket Package</a></li>
							<li><a href="view_package.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>View Ticket Package</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Slider</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="add_slider.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Slider</a></li>
							<li><a href="view_slides.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>View Slides</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Movies</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="add_movies.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Movies</a></li>
							<li><a href="view_movies.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>View Movies</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>	