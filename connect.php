<?php
$servername = "mysql-sebastianswoboda1.alwaysdata.net";
$username = "217205";
$password = "Dziwaczek1";
$dbname = "sebastianswoboda1_uwagatojestbazadanych";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
