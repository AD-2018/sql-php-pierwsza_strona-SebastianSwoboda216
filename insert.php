<?php
$servername = "mysql-sebastianswoboda1.alwaysdata.net";
$username = "217205";
$password = "TeczeImotylki123";
$dbname = "sebastianswoboda1_uwagatojestbazadanych";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, 'Seba', 1, 76,'2002-08-18')";

$conn->query($sql);

$conn->close();
?>
