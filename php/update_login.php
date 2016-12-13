<?php
include '../db/connect.php';

$username = $_POST['myusername'];
$password = $_POST['mypassword']; 
//print_r($_POST);

$sql = "update members set password = '$password' where username ='$username' ";

mysql_query($sql) or die(mysql_error());
header('Location: main_login.php');
?>