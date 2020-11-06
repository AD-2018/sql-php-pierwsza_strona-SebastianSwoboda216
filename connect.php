<?php
$servername = "mysql-sebastianswoboda1.alwaysdata.net";
$username = "217205";
$password = "TeczeImotylki123";
$dbname = "sebastianswoboda1_uwagatojestbazadanych";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
