<?php
$servername = "mysql-aaaaaaa.alwaysdata.net";
$username = "aaaaaaa_123";
$password = "1qa2ws3edde3sw2aq1";
$dbname = "aaaaaaa_tojestbazadanych";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
