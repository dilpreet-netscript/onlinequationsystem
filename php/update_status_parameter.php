<?php
include '../db/connect.php';

$id = $_POST['action1'];
$p_chk = $_POST['chkval'];

echo $id;
if($p_chk =='true')
{
$sql = "UPDATE parameters SET isActive='0' , chkvalue='false' WHERE id='$id' ";
mysql_query($sql) or die(mysql_error());
}
if($p_chk == 'false')
{
	$sql = "UPDATE parameters SET isActive='1' , chkvalue='true' WHERE id='$id' ";
mysql_query($sql) or die(mysql_error());
	}

return;
//die();
//header('');
?>