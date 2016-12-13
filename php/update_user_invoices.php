<?php
include '../db/connect.php';

$id = $_POST['id'];
$rgn = $_POST['rgn'];
//die();
$sql = "update customerorders set rh_status = '1' , rh_zone = '$rgn', isChange='false' where id = '$id'";

mysql_query($sql) or die(mysql_error());
mysql_close($con);

?>