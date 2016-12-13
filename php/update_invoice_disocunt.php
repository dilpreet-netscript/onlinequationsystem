<?php
session_start();
include '../db/connect.php';
$id = $_POST['id'];
$reg = $_SESSION['region'];
$discount = $_POST['discount'];
print_r($_POST);
//die();
$sql = '';
if($reg != '')
{
$sql = "update customerorders set isDiscount = '$discount' , rh_zone = '$reg' where id = '$id'";
mysql_query($sql) or die(mysql_error());
}
else
{
	$sql = "update customerorders set isDiscount = '$discount' where id = '$id'";
	mysql_query($sql) or die(mysql_error());
}

mysql_close($con);
?>