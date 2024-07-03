<?php
  // $hostname = "108.167.146.53";
  // $username = "unevebsy_mike";
  // $password = "martinez6143.";
  // $dbname = "unevebsy_sise_data_uneven";

  // $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // if(!$conn){
  //   echo "Database connection error".mysqli_connect_error();
  // }
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chat_local";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
