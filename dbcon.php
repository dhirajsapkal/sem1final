<?php
  $servername = "162.243.217.250";
  $username = "root";
  $password = "gTqRHDbMXC";
  // mysql_select_db("idd_632");
  $myDB = "ecommerce";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $myDB);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>