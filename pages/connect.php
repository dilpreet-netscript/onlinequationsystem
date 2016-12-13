<?php
// Connect to server and select databse.
$con = mysql_connect('localhost' , 'root' , '') or die('could not connect database');
$db = mysql_select_db('oqsnew_db') or die('could not select database');

?>