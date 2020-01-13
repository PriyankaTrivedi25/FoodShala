<?php
include "connection.php";
$title=$_POST['food_title'];
$price=$_POST['price'];
$veg=$_POST['is_veg'];
$avail=$_POST['available'];

$fid=$_GET['fid'];
// $description=$_POST['desc'];
// echo $description;
session_start();
// $cat=$_POST['cat'];
$path="";
			


							
								// $name = $_FILES['file']['name'];
								// $extension = explode('.', $name);
								// $extension = end($extension);
								// $type = $_FILES['file']['type'];
								// $size = $_FILES['file']['size'] ;
								$random_name = rand();
								// $tmp = $_FILES['file']['tmp_name'];

								if(!empty($_FILES["file1"]["name"]))
								{

								if(($_FILES["file1"]["type"]=="image/jpeg" )|| ($_FILES["file1"]["type"]=="image/png") && ($_FILES["file1"]["size"]<20000000)) 
									{
										if(($_FILES["file1"]["error"]==0))
											$temp=explode("/",$_FILES["file1"]["type"]);		
											$path ="../user/upload/".$random_name.".".$temp[1];
											move_uploaded_file($_FILES["file1"]["tmp_name"],$path);


											$q="UPDATE `food_mapping` SET `food_name` = '$title', `price` = $price, `available` = $avail, `is_veg` = $veg, `path` = '$path' WHERE `food_mapping`.`F_id` = $fid";
									
									}
									else{
										echo "error in uploading";
									}
								}
								else{
									$q="UPDATE `food_mapping` SET `food_name` = '$title', `price` = $price, `available` = $avail, `is_veg` = $veg WHERE `food_mapping`.`F_id` = $fid";
									
								}

								// echo $path;
								
									
									 echo $q2;
									$result=$conn->query($q);
									if($result)
									{
										header("location:menu.php");
									// echo ;
									}
									
								
?>
