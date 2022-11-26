<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "greendenpeak";

/* $dbServername = "sg2plzcpnl493870";
$dbUsername = "xn1lr2yjy9dy";
$dbPassword = "IBL/j6_m";
$dbName = "greendenpeak"; */

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>