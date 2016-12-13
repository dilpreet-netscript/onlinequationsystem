<?php
session_start();

if(!isset($_SESSION['myusername']))
{
	header('Location: ../php/main_login.php');
}

//echo $_SESSION['log_type'];
// this code below also work
/*if($_SESSION['myusername'] =='')
{
	header('Location: ../php/main_login.php');
}*/
?>
Welcome