<?php
session_start();
       if(empty($_SESSION['admin']))
       header("location:login.php");
if(isset($_SESSION['admin']))
{

	// echo $_SESSION['r_id'];

include("connection.php");
$sql="select * from order";
$data=$conn->query($sql);	
// $sql_cat=mysql_query("select * from catagory");	

	$fid=$_SESSION['r_id'];
	$qu="SELECT * FROM `restaurant` WHERE `R_ID`=$fid";
    // $qu="SELECT * FROM `food_mapping` WHERE `f_id`=$fid";
    //echo $qu;
    $res=$conn->query($qu);
	$row=$res->fetch_array();
	
	$r_name=$row[1];
	$is_veg=$row[2];
	$is_non_veg=$row[3];
	$is_open=$row[4];
	$add=$row[6];
    // echo $res;

	


// echo $dec;
// $sql_sel_cat=mysql_query("select * from catagory where cid=$cat");
//echo "select * from catagory where cid=$cat";
// $row_cat=mysql_fetch_array($sql_sel_cat);
// $cat1=$row_cat['name'];
				
?>
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
					<a class="navbar-brand" href="index.php"><img src="../user/images/logo.png" style="height:60px;width:170px;border-radius: 8px;"></img></a><br/>
										</div>
					<nav class="col-sm-12">
						<ul>
							
							<li class="hover-a"><a href="order.php">Orders</a></li>
							<li class="hover-a"><a href="menu.php">Update Menu</a></li>
							<li class="hover-a"><a href="update_details.php">Details</a></li>
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
									<div class="ibox-heading">
										<h3>Update Restaurant Details</h3>
									</div>
									<hr/>
									<div class="col-sm-10" style="background-color: #fff;padding: 20px 0; margin-top: 10px;">
	
		<div class="upload-form ibox-content" style="padding: 20px;">
			<form enctype="multipart/form-data" action="update_rest.php" method="POST"> 
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Restaurant Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rest_title" value="<?php echo $r_name;?>" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Address</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rest_add" value="<?php echo $add;?>" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px;" required>Restaurant image:</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="file1" id="fileUpload">
					</div>
				</div>
				
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Is Open:</label>
					<div class="col-sm-10">
						<select class="form-control" name="res_available">
						<?php if(isset($_SESSION['r_id']))
						{
							?>
								<?php if($is_open==1)
								{
									?>
									<option value="1" selected >Yes</option>
									
						<!-- <option value="1">Yes</option> -->
						<option value="0">No</option>
<?php 
								}
								if($is_open==0)
								{
?>
<option value="0" selected >No</option>

<option value="1">Yes</option>
						<!-- <option value="0">No</option> -->

							<?php
								
								}
							}
							else{
							
							?>
						
						<option value="1">Yes</option>
						<option value="0">No</option>

							<?php } ?>				
						</select>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Is veg available:</label>
					<div class="col-sm-10">
						<select class="form-control" name="is_veg">
						<?php if(isset($_SESSION['r_id']))
						{
							?>
								<?php if($is_veg==1)
								{
									?>
									<option value="1" selected >Yes</option>
									
						<!-- <option value="1">Yes</option> -->
						<option value="0">No</option>
<?php 
								}
								if($is_veg==0)
								{
?>

<option value="1">Yes</option>
						<!-- <option value="0">No</option> -->
<option value="0" selected >No</option>

							<?php
								
								}
							}
							else{
							
							?>
						
						<option value="1">Yes</option>
						<option value="0">No</option>

							<?php } ?>		
				
						</select>
					</div>

					
				</div>

				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Is non veg available:</label>
					<div class="col-sm-10">
						<select class="form-control" name="is_non_veg">
						<?php if(isset($_SESSION['r_id']))
						{
							?>
								<?php if($is_non_veg==1)
								{
									?>
									<option value="1" selected >Yes</option>
									
						<!-- <option value="1">Yes</option> -->
						<option value="0">No</option>
<?php 
								}
								if($is_non_veg==0)
								{
?>

<option value="1">Yes</option>
						<!-- <option value="0">No</option> -->
<option value="0" selected >No</option>

							<?php
								
								}
							}
							else{
							
							?>
						
						<option value="1">Yes</option>
						<option value="0">No</option>

							<?php } ?>		
				
						</select>
					</div>

					
				</div>
				<div class="row" style="margin:10px 0px;">
					
					<div class="col-sm-offset-5 col-sm-7">
						<!-- <input type="submit" value="Add"> -->

						<input type="submit" value="<?php if(isset($_GET['id'])){echo "Update";}else{echo "Update";}?>"  name="<?php if(isset($_GET['id'])){echo "update";}else{echo "Upload";}?>" />
						
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

</section>
<script>


</script>
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
</script><?php
}
?>
</html>