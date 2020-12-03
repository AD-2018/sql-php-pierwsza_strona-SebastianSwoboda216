<?php
$servername = "mysql-aaaaaaa.alwaysdata.net";
$username = "aaaaaaa";
$password = "SupcioChrupcio123";
$dbname = "aaaaaaa_tojestbazadanych";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
