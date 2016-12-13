<?php
include '../db/connect.php';

$id = $_POST['ids'];
$n = $_POST['name'];
$d = $_POST['desc'];
$dt = $_POST['date'];
print_r($_POST);

$sql = "update parameters set name='$n' , description='$d' , createdOn='$dt' where id = '$id'";

mysql_query($sql) or die(mysql_error());
?>