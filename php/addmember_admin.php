<?php
include '../db/connect.php';

$user = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$cp = $_POST['confirm-password'];
$logtype = $_POST['usertype'];
$rgn = $_POST['region'];
//print_r($_POST);
//die();
foreach($_POST as $key=>$val)
{
	
	echo '<br>' . $val;
}
//$sql_test_already = "select * from members where username = '$user' , password = '$password', login_type = '$logtype' ";

//$result = mysql_query($sql_test_already) or die(mysql_error());


if($password == $cp AND $user != '' AND $email !='' OR $rgn !='')
{
	
	//echo 'Good information';
	$sql = "insert into members (username , password , email , login_type, region) values( '$user' , '$password' , '$email' , '$logtype[0]' , '$rgn')";
	mysql_query($sql) or die(mysql_error());
	//echo "<b><font color='red'>Sorry, Wrong information entered. Please enter all field carefully...</font></b><br>";
	header('Location: ../pages/admin.php');
}

else{
	echo "<div class='row'>";
		
		echo "<div class='col-lg-12 col-md-offset-3'>";
	echo "<b><font color='red'>Sorry, Wrong information entered. Please enter all field carefully...</font></b><br>";
	echo '</div></div>';
	
include 'addmember_admin.php';
}

//die();
?>