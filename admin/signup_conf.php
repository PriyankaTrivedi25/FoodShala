<?php

include "connection.php";

$r_name=$_POST['rest_title'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$m_no=$_POST['m_no'];
$add=$_POST['address'];
$veg=$_POST['is_veg'];
$non_veg=$_POST['is_non_veg'];


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

											$q1="INSERT INTO `restaurant` (`R_ID`, `r_name`, `veg`, `non_veg`, `is_available`, `path`, `address`) VALUES (NULL, '$r_name', $veg, $non_veg, 1, '$path', '$add')";


											// $q="UPDATE `foodshala`.`food_mapping` SET `food_name` = '$title', `price` = $price, `available` = $avail, `is_veg` = $veg, `path` = '$path' WHERE `food_mapping`.`F_id` = $fid";
									
									}
									else{
										echo "error in uploading";
									}
								}
								else{
									
$q1="INSERT INTO `restaurant` (`R_ID`, `r_name`, `veg`, `non_veg`, `is_available`, `path`, `address`) VALUES (NULL, '$r_name', $veg, $non_veg, 1, '', '$add')";
								}
						
$res =$conn->query($q1);

if($res)
{

$q2="select * from `restaurant` order by R_ID desc limit 1";

$res1=$conn->query($q2);

$row1=$res1->fetch_array();

$res_id  = $row1[0];

$q3="INSERT INTO `restaurant_owner` (`r_owner_id`, `owner_name`, `email_id`, `pwd`, `res_id`, `mobile_no`) VALUES (NULL, '$r_name', '$email', '$pwd', $res_id, '$m_no')";


$res=$conn->query($q3);

if($res)
{

	header("location:login.php");
}





}


// $r1=mysql_fetch_array($res);

// echo $r1[0];






?>