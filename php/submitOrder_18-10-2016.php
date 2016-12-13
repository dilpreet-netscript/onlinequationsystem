<?php
include '../db/connect.php';

$ids = $_POST['arrid'];

//$ids = $_POST['ids'];

//print_r($ids);

$totalids = count($ids);
//$cust_random = rand(min,max);
//$cust_random = rand();
$randnum = rand(1111111111,9999999999);
$tmp = array();
foreach ($ids as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;

}
//print_r($tmp);
$tmpjoin = implode(" , ",$tmp);

//echo $tmpjoin;

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$message = $_POST['message'];

//print_r($ids);

			//customer table record added
			$sql1 = "insert into customerorders(name , email , contact , address , message,orderids,cust_id) values( '$name','$email','$contact','$address','$message','$tmpjoin','$randnum')";
			//customer invoices record added
			$sql2 = "insert into customer_invoices(cust_name , orderids , cust_random) values('$name' ,'$tmpjoin' , '$randnum' ) ";
			
			mysql_query($sql1) or die(mysql_error());	//customerorders
			mysql_query($sql2) or die(mysql_error());	//customer_invoices
			
// Redirect to Home page
header('Location: ' . 'index_new.html', true);

?>