<?php
include '../db/connect.php';
error_reporting(0);
$id = implode("",$_POST['ids']);

$name = mysql_real_escape_string($_POST['name']);
$date = mysql_real_escape_string($_POST['date']);
$price = mysql_real_escape_string($_POST['price']);
$act=1;
print_r($_POST);

echo '<br>';

//die();

$qry = "select * from parameters where id='$id'";

$result = mysql_query($qry) or die(mysql_error());

$record = mysql_fetch_array($result);
//echo $record . '<br>';

$par_id = $record[0];
$p_id = $record[6];

echo 'parameter id: ' . $par_id . 'product_id :' . $p_id . '<br>';
$num_rows = mysql_num_rows($result);
echo $num_rows . '<br>';

if($num_rows > 0){
    $sql = "insert into products_parameters_opt(product_id ,parameter_id , paramopt , isActive , createdOn,value) values('$p_id','$par_id','$name','$act','$date','$price')";
	mysql_query($sql) or die(mysql_error());
	
	
	}else
	{
    echo "Parameter is not available!!!";
}

//mysql_close($con);
//die();
//go to home page after submit values
header('Location: ../pages/admin.php');
?>