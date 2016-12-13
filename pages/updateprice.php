<?php

$q = $_GET['q'];
$p = $_GET['p'];

$total = $p * $q;
print_r($_REQUEST);
print_r($_GET);

echo $total;

die();
?>