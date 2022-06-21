



<?php

$servername = "localhost";
$database = "events_doc";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  
  
mysqli_set_charset($con,"utf8");
mysqli_select_db($con,"events_doc");

?>