<?php
include '../db/connect.php';

//$id ='';

//$id = $_GET['id'];
if($_POST)
{
$name = $_POST['name'];
$pd = $_POST['description'];
//$act = $_POST['active'];
//$inact= $_POST['inactive'];
$date = $_POST['date'];
//$act=$_POST['status'];
//echo 'id: ' . $id . '<br>';
$act=1;
//print_r($_POST);

$sql2 = "insert into products(name , description , isActive , createdOn) values('" . $name . " ' , ' " .$pd. " ' , ' " .$act. " ' , ' " . $date . " ')";
$result = mysql_query($sql2);

mysql_close($con);
//die();
//go to home page after submit values
//header('Location: ../pages/admin.php');
}
?>