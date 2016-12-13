<?php
session_start();
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. $_SESSION['region'] 

//if(!session_is_registered(myusername)){
	if(!$_SESSION['myusername']){
header("location:main_login.php");
	}
else if( $_SESSION['log_type'] == 'user' && isset($_SESSION['userid']))
{
	header("Location: ../pages/index.php");	
}
else if($_SESSION['log_type'] == 'admin' && isset($_SESSION['userid']))
{
	header('Location: ../pages/admin.php');
	
}
else if($_SESSION['log_type'] == 'regionalhead' && isset($_SESSION['userid']))
{
	header('Location: ../pages/rh.php');
	
}
else if($_SESSION['log_type'] == 'regionalhead' && $_SESSION['region'] == 'north' && isset($_SESSION['userid']))
{
	header('Location: ../pages/rh.php');
	
}
else if($_SESSION['log_type'] == 'regionalhead' && $_SESSION['region'] == 'east' && isset($_SESSION['userid']))
{
	header('Location: ../pages/rh.php');
	
}
else if($_SESSION['log_type'] == 'regionalhead' && $_SESSION['region'] == 'west' && isset($_SESSION['userid']))
{
	header('Location: ../pages/rh.php');
	
}
else if($_SESSION['log_type'] == 'regionalhead' && $_SESSION['region'] == 'south' && isset($_SESSION['userid']))
{
	header('Location: ../pages/rh.php');
	
}
else if($_SESSION['log_type'] == 'pricemanager' && isset($_SESSION['userid']))
{
	header('Location: ../pricemanager/index.php');
	
}
else if($_SESSION['log_type'] == 'delivery' && isset($_SESSION['userid']))
{
	header('Location: ../pages/delivery.php');
	
}
else if($_SESSION['log_type'] == 'warehouse' && isset($_SESSION['userid']))
{
	header('Location: ../pages/warehouse.php');
	
}
else
{
	echo 'user type not set to login...';
	header("location:main_login.php");
	
}
?>