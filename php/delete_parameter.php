<?php
include '../db/connect.php';

$id = $_POST['ids'];


echo $id;
$chk1 = 'SET foreign_key_checks = 0';
$chk2 = 'SET foreign_key_checks = 1';

$sql = "delete from parameters WHERE id='$id' ";

//To disable foreign key checks
mysql_query($chk1) or die(mysql_error());

mysql_query($sql) or die(mysql_error());

//To enable foreign key checks
mysql_query($chk2) or die(mysql_error());
?>