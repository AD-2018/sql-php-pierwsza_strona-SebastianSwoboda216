<?php
require_once("connect.php");

 $sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki,data_urodzenia)
WARTOŚCI (null",. ""'.  $_POST['imie']. ""'. ',',.  $_POST['dzial']. ',',.  $_POST['zarobki']. ',',.  $_POST["data_urodzenia"].')';

$conn->query($sql);

$conn->close();
?>
