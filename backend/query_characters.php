<?php

// Report all errors
error_reporting(E_ALL);
ini_set('display_errors', '1');

//Set page encoding to utf8
header('Content-type: text/html; charset=utf-8');

$conn = mysql_connect('localhost', 'root', 'rawroro');
mysql_set_charset('utf8');

if (!$conn) {
  die('Connection failed');
}

//Query the database for the characters and send them to the front end.
$tests = mysql_select_db('tests', $conn);

$query = "SELECT * FROM tests WHERE 1";
$result = mysql_query($query);
while ( $row = mysql_fetch_array($result) ) {
  var_dump($row);
}

mysql_close($conn);
?>