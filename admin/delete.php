<?php
include("connection.php");
$id=$_GET['vid'];
$sql="delete from `food_mapping` where F_id=$id";
$result=$conn->query($sql);
if (isset($result)) {
	
header("location:menu.php");
}
else{
	echo "error";
}
?>