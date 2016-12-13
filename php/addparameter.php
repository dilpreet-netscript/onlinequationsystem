<?php
include '../db/connect.php';
error_reporting(0);
$id = implode("",$_POST['ids']);

$name = mysql_real_escape_string($_POST['name']);
$pd = mysql_real_escape_string($_POST['description']);
$date = mysql_real_escape_string($_POST['date']);
$act=1;
print_r($_POST);

echo '<br>';

//die();

$qry = "select id from products where id='$id'";

$result = mysql_query($qry) or die(mysql_error());
$num_rows = mysql_num_rows($result);
echo $num_rows . '<br>';
if($num_rows > 0){
    $sql = "insert into parameters(name , description , isActive , createdOn, p_id) values('$name','$pd','$act','$date','$id')";
	mysql_query($sql) or die(mysql_error());
	
	}else
	{
    echo "Product is not available!!!";
}



mysql_close($con);
//die(mysql_error());
//go to home page after submit values
header('Location: ../pages/admin.php');
?>