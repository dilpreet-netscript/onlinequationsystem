<?php
include '../db/connect.php';

$id = $_POST['id'];
//echo $id;
$sql = "update customerorders set delivered = 'yes' where id = '$id' ";
//die();
$result = mysql_query($sql) or die(mysql_error());

?>