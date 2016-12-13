<?php
include '../db/connect.php';

//$get_day = array();

$id = $_POST['id'];
$day = $_POST['day'];
$val_day = $_POST['dval'];



/*echo 'id -' . $id . '<br>';
echo 'get day -' .$day . '<br>';
echo 'day val -' . $val_day . '<br>';*/
//print_r($_POST)
//die();
/*$result = mysql_query($query);

$row = mysql_fetch_object($result);*/

//monday
if($day  =='monday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day1='true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='monday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day1 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//tuesday
else if($day  =='tuesday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day2 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='tuesday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day2 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//wednesday
else if($day  =='wednesday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day3 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='wednesday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day3 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//thursday
else if($day  =='thursday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day4 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='thursday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day4 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//friday
else if($day  =='friday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day5 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='friday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day5 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//saturday
else if($day  =='saturday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day6 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='saturday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day6 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

//sunday
else if($day  =='sunday' && $val_day == 'false')
{
	$sql = "UPDATE members SET day7 = 'true' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}
else if($day  =='sunday' && $val_day == 'true')
{
	$sql = "UPDATE members SET day7 = 'false' WHERE id='$id' ";
	mysql_query($sql) or die(mysql_error());
}

else
{
	return;
}
//return;
//die();

?>