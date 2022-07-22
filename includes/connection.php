<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "greendenpeak-opc";

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>