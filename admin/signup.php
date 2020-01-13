<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section id="wrapper">
	<div class="row">
			<div class="col-sm-2 dashboard">
				<div class="row">
					<div class="col-sm-12">
					<a class="navbar-brand" href="index.php"><h2 style="color:white; ">Foodshala</h2></a><br/>
				<a class="hover-a navbar-brand" style="" ><h4 style="color:white; text-align:center;">Business</h4></a>
					</div>
					<nav class="col-sm-12">
						<ul>
							
							<!-- <li class="hover-a"><a href="order.php">Orders</a></li> -->
							<!-- <li class="hover-a"><a href="menu.php">Update Menu</a></li> -->
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-sm-10 content">
				<div class="wrapper-top">
					<div class="row">
						<div class="col-sm-10">
							<div class="top-heading">
							
								<h3>Registeration Page</h3>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="logout">
								<!-- <i class="fa fa-sign-out"></i><a href="logout.php">Log Out</a> -->
							</div>
						</div>
                      <!-- <?php if($nik==0)
                        { ?>
						<div class="col-sm-12 page-heading">
							<div class="page-heading-content">
								<h3>Videos</h3>
								<p>Home / <a href="#"> Videos </a></p>
							</div>
						</div>
		<?php } ?>-->
						<div class="col-sm-12">
							
								<div class="ibox">
									
									<div class="col-sm-10" style="background-color: #fff;padding: 20px 0; margin-top: 10px;">
	
		<div class="upload-form ibox-content" style="padding: 20px;">
			<form enctype="multipart/form-data" action="signup_conf.php" method="POST"> 
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Restaurant Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rest_title" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Email Id:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="pwd" id="pwd" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Confirm Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="conf_pwd" id="conf_pwd" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Mobile No:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="m_no" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Address :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address"  required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px;" required>Restaurant image:</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="file1" id="fileUpload">
					</div>
				</div>
				
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">is veg available?</label>
					<div class="col-sm-10">
						<select class="form-control" name="is_veg">
						
						<option value="1">Yes</option>
						<option value="0">No</option>

						
				
						</select>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">is non-veg available?</label>
					<div class="col-sm-10">
						<select class="form-control" name="is_non_veg">
						
						<option value="1">Yes</option>
						<option value="0">No</option>

						
				
						</select>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					
					<div class="col-sm-offset-5 col-sm-7">
						<!-- <input type="submit" value="Add"> -->

						<input type="submit" onsubmit="return is_yo();" value="Submit" />
						
					</div>
				</div>
				<div class="song-body row" style="margin-right:0px;">
											</div>
			</form>
		</div>
	</div>

	
					
						
								</div>
							
						</div>
					</div>
				</div>
			</div>
	</div>
	

</section>
</body>
<script src="js/jquery.js"></script>
<script>
	$("#dropdown").hover(function(){
		$(".dropdown").css("display","block");
		$("#dropdown").css("background-color","rgba(10,10,10,0.7)");
	});
	$(".dropdown").hover(function(){
		$(".dropdown").css("display","block");
	});
	$("#dropdown").mouseleave(function(){
		$(".dropdown").css("display","none");
	});
	$(".dropdown").mouseleave(function(){
		$(".dropdown").css("display","none");
	});

	function is_yo()
	{

		// alert('Yoooooo');
		var v1=document.getElementById("pwd");
		var v2=document.getElementById("conf_pwd");


		if(v1.value==v2.value)
		{
			return true;
		}
		else{
			alert("Both Password must be same");
			return false;
		}


	}


</script>
</html>