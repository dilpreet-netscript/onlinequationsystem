<?php
include '../db/connect.php';

$sql = "select * from customerorders where isActive = 0";

$result = mysql_query($sql) or die(mysql_error());

$rowcount=mysql_num_rows($result);

printf($rowcount);

?>