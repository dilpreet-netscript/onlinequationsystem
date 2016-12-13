<?php
include '../db/connect.php';
$usrid = $_POST['uid'];
$cust_id = $_POST['cust_id'];

//$orderids = $_POST['order_ids'];
$cart = $_POST['cart'];

//echo $orderids;
echo $usrid . '<br>';
echo $cust_id . '<br>';
//print_r($_POST) . '<br>';
//echo json_encode($cart);
//$cartdata = [];
$tmp = array();
foreach($cart as $a)
{
    //echo $a['id'] . ',' . $a['item'] . ',' .$a['quantity'] . '<br>';
	$tmp[]=$a['quantity'];
	
}
$tmpjoin = implode(" , ",$tmp);
//var_dump($tmpjoin);
print_r($tmpjoin);
/*$tmp = array();
foreach ($cart as $value) {
    //echo "Key: $key; Value: $value\n";
	//echo $value;
	$tmp[]=$value;

}*/
//print_r($tmp);
//$tmpjoin = implode(" , ",$tmp);
//echo '<br>---------<br>';
//print_r($cart);
 //$cartdata = json_encode($cart, JSON_PRETTY_PRINT);

 $sql = "insert into customer_cart_items(user_id , cust_id , customer_cart) values('$usrid' , '$cust_id' , '$tmpjoin')";
 mysql_query($sql) or die(mysql_error());
 
 //header('Location: ../pages/index.php');
 //die();

?>