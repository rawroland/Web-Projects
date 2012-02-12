<?php

  $conn = mysql_connect('localhost', 'root', 'rawroro');
  
  if (!$conn) {
    die('Connection failed');
  }
  
  echo $_GET['funnyChars'];
  echo mysql_client_encoding($conn);
  mysql_close($conn);
?>