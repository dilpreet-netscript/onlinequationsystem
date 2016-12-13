<?php
include '../db/connect.php';
$id = $_GET['id'];
//echo $id;
$sql = "select * from wh_products where id = '$id'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_object($result))
{
	echo $row->prod_name;
}
?>
