<?php
  $hostname = "localhost";
  $username = "u178906478_root";
  $password = "Dewikartika499";
  $dbname = "u178906478_chatweb";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
