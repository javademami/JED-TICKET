<?php require_once"db/session.php";
	require_once"db/db_config.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Minimal | package</title>
		<?php include_once"head_files.php";?>
	</head>
	<body>
		<div id="wrapper">
			<!----->
			<?php include_once"header.php";?>
			<div id="page-wrapper" class="gray-bg dashbard-1">
				<div class="content-main">
					<!--banner-->
					<div class="banner">
						<h2>
							<a href="index.php">Home</a>
							<i class="fa fa-angle-right"></i>
							<span>Add Ticket Package</span>
						</h2>
					</div>
					<!--//banner-->
					<!--grid-->
					<div class="grid-form">
						<div class="grid-form1">
							<h3>Add Ticket Package</h3>
							<div class="panel-body">
								<form class="form-horizontal"  method="post" id="add_package" action="ajax/user.php"   enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Ticket Name :</label>
										<div class="col-md-8">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-key"></i>
												</span>
												<input type="text" class="form-control1 myform" name="package_name" id="package_name" placeholder="Ticket Name"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Ticket Limit :</label>
										<div class="col-md-8">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-key"></i>
												</span>
												<input type="number" class="form-control1 myform" name="package_limit" id="package_limit" placeholder="Ticket Limit "/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Ticket Price :</label>
										<div class="col-md-8">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-key"></i>
												</span>
												<input type="number" class="form-control1 myform" name="package_rate" id="package_rate" placeholder="Ticket Price "/>
											</div>
										</div>
									</div>
									
									<p class="myerror" id="error"></p><br/>
									<div class="col-md-4 login-do col-md-offset-4">
										<label class="hvr-shutter-in-horizontal login-sub">
											<input type="submit"  name="add_package" value="Add package">
										</label>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--//grid-->
					<!---->
					<?php include_once"footer.php";?>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php include_once"footer_scripts.php";?>
		<script>
			
			
			$(document).ready(function(){
				$("#add_package").submit(function(){
					var package_name = $.trim($('#package_name').val());
					var package_rate = $.trim($('#package_rate').val());
					var package_limit = $.trim($('#package_limit').val());
					if(package_name=="")
					{
						$("#package_name").focus();
						$("#package_name").css('border','2px solid #ec000069');
						$("#error").text('Please Provide a package Name');
						alertify.error('Please Provide a package Name');
						return false;
					}
					if(package_limit=="")
					{
						$("#package_limit").focus();
						$("#package_limit").css('border','2px solid #ec000069');
						$("#error").text('Please Provide a package  seat limit');
						alertify.error('Please Provide a package seat limit');
						return false;
					}
					if(package_rate<0)
					{
						$("#package_rate").focus();
						$("#package_rate").css('border','2px solid #ec000069');
						$("#error").text('Please Provide a package  rate');
						alertify.error('Please Provide a package rate');
						return false;
					}
					$("#error").text('');
						$.ajax({
						url : "ajax/user.php",
						method:"post",
						data:{"package_name":package_name,"package_limit":package_limit,"package_rate":package_rate,"add_package":1},
						success:function(data){
							if(data==1)
							{
								$('#package_name').css('border','1px solid #BEBEBE');
								alertify.alert("package Added Successfully", function(){
									window.location = "view_package.php";
								});
							}
							else
							{
								alertify.alert("Something Wrong", function(){
									location.reload();
								});
							}
						}
					});
					return false;
				});
			});
		</script>
	</body>
</html>