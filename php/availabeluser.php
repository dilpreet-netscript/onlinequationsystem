<?php
include '../db/connect.php';

$sql = "select * from members";

$result = mysql_query($sql) or die(mysql_error());

$a = array();
while($row = mysql_fetch_array($result))
{
	$a[] = $row[1];
	
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    //$len=strlen($q);
    foreach($a as $name) {
        if (strcasecmp($q, $name) == 0) {
            if ($hint === "") {
                $hint = 'Exist';
            } else {
                $hint.="You got username";
            }
		}
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "You got username" : $hint;
?>