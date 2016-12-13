<?php
//include '../db/connect2.php';
include '../db/connect.php';

$ids = $_POST['arrid'];
$cust_id = $_POST['cust_id'];

//$ids = $_POST['ids'];

//print_r($ids);

$totalids = count($ids);
//$cust_random = rand(min,max);
//$cust_random = rand();
//$randnum = rand(1111111111,9999999999);
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
$uid = $_POST['usrid'];

//print_r($ids);

			//customer table record added
			
			//mysql_query("insert into customerorders(name , email , contact , address , message,orderids,cust_id) values( '$name','$email','$contact','$address','$message','$tmpjoin','$randnum')");
			//mysql_query("insert into customer_invoices(cust_name , orderids , cust_random) values('$name' ,'$tmpjoin' , '$randnum' )");
			$sql = "insert into customerorders(name , email , contact , address , message,orderids,cust_id,user_id) values( '$name','$email','$contact','$address','$message','$tmpjoin','$cust_id','$uid');";
			
			//$sql .= "insert into customer_invoices(cust_name , orderids , cust_id) values('$name' ,'$tmpjoin' , '$cust_id' ); ";
			//$sql .= "insert into customer_invoices(user_id , customer_id , customer_cart) values('$name' ,'$tmpjoin' , '$cust_id' ); ";
			mysql_query($sql) or die(mysql_error());
			//header('Locatin: ../pages/index.php');
			/*if (mysqli_multi_query($conn, $sql)) {
				
					header('Location: ' . '../pages/index.php', true);
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}*/
//$conn->close();
header('Location: ../pages/index.php');
?>