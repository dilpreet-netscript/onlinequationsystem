<?php
include '../db/connect.php';

$id = $_POST['id'];
$val = $_POST['changeval'];
//$dis = $_POST['discount'];

if($val == 'false')
{
	$sql = "update customerorders set isChange= 'true' where id = '$id' ";
	mysql_query($sql) or die(mysql_error());
}
if($val == 'true')
{
	$sql = "update customerorders set isChange= 'false' where id = '$id' ";
	mysql_query($sql) or die(mysql_error());
}
mysql_close($con);
?>