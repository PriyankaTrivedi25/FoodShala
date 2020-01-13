<?php
include "connection.php";
$title=$_POST['food_title'];
$price=$_POST['price'];
$veg=$_POST['is_veg'];
$avail=$_POST['available'];
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

								if(($_FILES["file1"]["type"]=="image/jpeg" )|| ($_FILES["file1"]["type"]=="image/png") && ($_FILES["file1"]["size"]<20000000)) 
									{
										if(($_FILES["file1"]["error"]==0))
											$temp=explode("/",$_FILES["file1"]["type"]);		
											$path ="../user/upload/".$random_name.".".$temp[1];
											move_uploaded_file($_FILES["file1"]["tmp_name"],$path);
								    
								echo $path;
								
								$rest_id= $_SESSION['r_id'];
									 $q2="INSERT INTO `food_mapping` (`F_id`, `r_id`, `food_name`, `price`, `available`, `is_veg`, `path`) VALUES (NULL,$rest_id , '$title', $price, $veg, $avail,'$path')";
									
									 echo $q2;
									$result=$conn->query($q2);
									if($result)
									{
										header("location:menu.php");
									// echo ;
									}
									else{
										echo "error in uploading";
									}
								}
								else{

									echo "File Size Exceeded";
									

								}
?>
