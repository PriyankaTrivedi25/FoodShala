<?php
session_start();
include "connection.php";
$email=$_POST["email"];
$password=$_POST["password"];
$q="SELECT * FROM `restaurant_owner` WHERE email_id='$email' and pwd='$password'";
echo $q;
$r=$conn->query($q);
$num=$r->num_rows;
if($num>=1)
{

		$arr=$r->fetch_array();
		$_SESSION['admin']=$email;
		$_SESSION['r_id']=$arr[4];
			header("location:menu.php");
			// session_de
			//echo "Login successfully";

}	

else
{
	$_SESSION["msg"]="Invalid USERNAME or PASSWORD ...";
	header("location:index.php");

}


?>