<?php
// Start the session
session_start();
include '../db/connect.php';

/*$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name */
$tbl_name="members"; // Table name 

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$usr_obj = mysql_fetch_object($result);
$day1 = $usr_obj->day1;
$day2 = $usr_obj->day2;
$day3 = $usr_obj->day3;
$day4 = $usr_obj->day4;
$day5 = $usr_obj->day5;
$day6 = $usr_obj->day6;
$day7 = $usr_obj->day7;
//echo $day1 .  ' - ' .$day7;
$today = date('l'); // output: current day.
//die();
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

//session_register("myusername");
//session_register("mypassword");

$sql2="SELECT id , login_type , region FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result2 = mysql_query($sql2);
$row = mysql_fetch_array($result2);
$temp = $row['login_type'];
$rgn = $row['region'];
$uid = $row['id'];
//echo $temp;
//echo mysql_result($result2, 1); // outputs third employee's name
$_SESSION['log_type'] = $temp;
$_SESSION['myusername']=$myusername;
$_SESSION['userid']=$uid;
$_SESSION['region']=$rgn; 
//echo $temp;
//die();
//$_SESSION['mypassword']=$mypassword;
		if($today == 'Monday' && $day1 == 'true')
		{
		header("location:login_success.php");
		}
		else if($today == 'Tuesday' && $day2 == 'true')
		{
			header("location:login_success.php");
		}
		else if($today == 'Wednesday' && $day3 == 'true')
		{
			header("location:login_success.php");
		}
		else if($today == 'Thursday' && $day4 == 'true')
		{
			header("location:login_success.php");
		}
		else if($today == 'Friday' && $day5 == 'true')
		{
			header("location:login_success.php");
		}
		else if($today == 'Saturday' && $day6 == 'true')
		{
			header("location:login_success.php");
		}
		else if($today == 'Sunday' && $day7 == 'true')
		{
			header("location:login_success.php");
		}
		else{
			echo "User is not authorized today...";
		header("location:main_login.php");
		}
}
else {
echo "Wrong Username or Password";
header("location:main_login.php");
}
?>