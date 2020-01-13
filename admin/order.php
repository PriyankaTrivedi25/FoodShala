<?php
session_start();
       if(empty($_SESSION['admin']))
       header("location:login.php");
if(isset($_SESSION['admin']))
{
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
							<li class="hover-a"><a href="update_details.php">Details</a></li>
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


					<!--tableee-->
			<div class="col-sm-12">				
							<div class="ibox">
									<div class="ibox-heading">
										<h3>Orders</h3>
									</div>
									<hr />

									<?php
									$r1=$_SESSION['r_id'];
									
									$sq1="SELECT * FROM `order` WHERE `r_id` =$r1 order by `order_id` desc";

									$re=$conn->query($sq1);
									
									$count=$re->num_rows;

									echo "<h3 style='text-align:center; color:red;'>Total Number of orders : ".$count."</h3>";
	
									if($count==0)
									{
										echo "<h4 style='text-align:center; color:green;'> No Orders Yet :( </h4>";
									}


									while($arr1=$re->fetch_array())
									{
									// "SELECT * FROM `order_item_mapping` WHERE `order_id` = 165 "	
									
									?>

									
						
									<div class="ibox-table">
										<table class="table table-hover">
											<h6 style="font-weight:bold; background-color:#D3D3D3;">Order #<?php echo $arr1[0];?></h6>
											<tr>
												<th>Food Name</th>
												<th>Quantity</th>
												<th>Value</th>		
																						
											</tr>
										<?php
// $r=$_SESSION['r_id'];
$x1=$arr1[0];

$total = $arr1[3];
											$sql="SELECT * FROM `order_item_mapping` o1 where o1.order_id=$x1";
											$data=$conn->query($sql);
											while ($arr=$data->fetch_array()) {
											
										?>	
											<tr>
												
												<td><?php echo $arr[2];?></td>
												<td><?php echo $arr[3];?></td>
												<td><?php echo $arr[4];?></td>										
											</tr>
								
											<?php
												}
										?>
										<tr><td colspan="2" style="font-weight:bold;">Total Bill:</td><td style="font-weight:bold;"><?php echo $total; ?></td></tr>												

										</table>
									</div>

								<?php
									}
									?>
						</div>
						
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