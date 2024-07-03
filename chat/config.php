<?php
  $hostname = "162.241.62.190";
  $username = "siste200";
  $password = "Metallica@1997";
  $dbname = "siste200_chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
