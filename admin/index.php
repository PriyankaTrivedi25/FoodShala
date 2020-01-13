<?php
session_start();
       if(empty($_SESSION['admin']))
	   header("location:login.php");
	   
if(isset($_SESSION['admin']))
{
	header("location:menu.php");
include("connection.php");
$sql="select * from order";
$data=$conn->query($sql);	
// $sql_cat=mysql_query("select * from catagory");					
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	.hover-a a:hover{
	background-color:rgba(10, 10, 10, 0.7);
	}
	</style>
</head>
<body>
<section id="wrapper">
	<div class="row">
			<div class="col-sm-2 dashboard">
				<div class="row">
					<div class="col-sm-12">
					<a class="navbar-brand" href="index.php"><h2 style="color:white; ">Foodshala</h2></a><br/>
				<a class="hover-a navbar-brand" style="" ><h4 style="color:white; align:center;">Business</h4></a>
						<!-- <img src="img/logo.png" class="img-responsive logo"> -->
					</div>
					<nav class="col-sm-12">
						<ul>

							<li class="hover-a"><a href="order.php">Orders</a></li>
							<li class="hover-a"><a href="menu.php">Update Menu</a></li>
							<!-- <li class="hover-a"><a href="byuser.php">By Users</a></li>
							<li class="hover-a"><a href="maxlike.php">Maximum Like</a></li>
							<li id="dropdown"><a href="search.php">Search</a></li> -->
							<!-- <ul class="dropdown" style="display:none;"> -->
						
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-sm-10 content">
				<div class="wrapper-top">
					<div class="row">
						<div class="col-sm-10">
							<div class="top-heading">
							<?php 

include "connection.php";

				$email=$_SESSION['admin'];

							$q1="select * from restaurant_owner where email_id='$email'";
							$cat1=$conn->query($q1);
							// echo $cat1;
							// echo $/q1;
							$arr1=$cat1->fetch_array();
							?>

								<h3>Welcome <?php echo $arr1[1]; ?></h3>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="logout">
								<i class="fa fa-sign-out"></i><a href="logout.php">Log Out</a>
							</div>
						</div>


			<div class="col-sm-10">
		
	

		<div class="clearfix"></div>
		
		<div class="song-body row" style="margin-right:0px;">
			<div class="col-sm-12">
			
			</div>
		</div>
	</div>


	
</div>

</section>
<h1>hjghjg</h1>
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
</script>
<?php
}?>

</html>