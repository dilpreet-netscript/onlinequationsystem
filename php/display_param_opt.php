<?php

include '../db/connect.php';

$sql = "select * from products_parameters_opt";

$result = mysql_query($sql) or die(mysql_error());

$a = array();
while($row = mysql_fetch_array($result))
{
	$a[] = $row[3];
	
}
// Array with names
//print_r($a); // show all array data
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
				$hint .= ",$name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>