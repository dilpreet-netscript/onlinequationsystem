<?php
include '../db/connect.php';

$user = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$cp = $_POST['confirm-password'];
$logtype = $_POST['usertype'];
print_r($_POST);
//echo '<br>';
//echo count($logtype);
//echo $logtype[0];
//die();
foreach($_POST as $key=>$val)
{
	
	echo '<br>' . $val;
}

if($password == $cp AND $user != '' AND $email !='')
{
	
	//echo 'Good information';
	$sql = "insert into members (username , password , email , login_type) values( '$user' , '$password' , '$email' , '$logtype[0]')";
	mysql_query($sql) or die(mysql_error());
	header('Location: main_login.php');
}
else{
	echo "<div class='row'>";
		
		echo "<div class='col-lg-12 col-md-offset-3'>";
	echo "<b><font color='red'>Sorry, Wrong information entered. Please enter all field carefully...</font></b><br>";
	echo '</div></div>';
	
include 'register.php';
}

die();
?>