

<?php


include "connection.php";

// session_start();

$name=$_POST['sp_name'];
$add=$_POST['sp_address'];
$con=$_POST['sp_contact'];
$email=$_POST['sp_email'];
$pwd=$_POST['sp_pwd'];
$pref=$_POST['preference_'];

// $q1="insert into customer ".$id;

// $q1 ="INSERT INTO `foodshala`.`customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES (NULL, '$_POST['sp_name']', '$_POST['sp_address']', '$_POST['sp_contact]', '$_POST['sp_email]', '$_POST['sp_pwd']', $_POST['prefernce_'])";

$q1="INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES (NULL, '$name', '$add', '$con', '$email', '$pwd', $pref)";
$res = $conn->query($q1);
echo $res;

if($res)
{
    // $_SESSION["signup_msg"]="Signup Successful";
    header("location:index.php?signup_status=1");
}
else{
    header("location:index.php?signup_status=0");
    // $_SESSION["signup_msg"]=mysql_error();
    // echo mysql_error();
}

?>
