<?php

include "connection.php";

session_start();

$r_id=$_SESSION['r_id'];
$r_name=$_POST['rest_title'];
$r_add=$_POST['rest_add'];
$is_veg=$_POST['is_veg'];
$non=$_POST['is_non_veg'];
$avail=$_POST['res_available'];

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
                                            $q1="UPDATE `restaurant` SET  `r_name` = '$r_name', `veg` = '$is_veg', `non_veg` = '$non', `is_available` = '$avail', `path` = '$path', `address` = '$r_add' WHERE `restaurant`.`R_ID` = $r_id";


											// $q="UPDATE `food_mapping` SET `food_name` = '$title', `price` = $price, `available` = $avail, `is_veg` = $veg, `path` = '$path' WHERE `food_mapping`.`F_id` = $fid";
									
									}
									else{
										echo "error in uploading";
									}
                                }
                                else{

                                    $q1="UPDATE `restaurant` SET  `r_name` = '$r_name', `veg` = '$is_veg', `non_veg` = '$non', `is_available` = '$avail', `address` = '$r_add' WHERE `restaurant`.`R_ID` = $r_id";



                                }


$res=$conn->query($q1);
// echo $res;

if($res)
{
    header("location:menu.php");
}
else{
    echo "Error Occured";
}

?>