<?php
include '../db/connect.php';

$id = $_POST['id'];
//echo $id;
$sql = "update customerorders set isShip = 1 where id = '$id' ";
//die();
$result = mysql_query($sql) or die(mysql_error());

?>