<?php
require_once("../connect.php");

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,".'"'.$_POST['imie'].'"'.','.$_POST['dzial'].','.$_POST['zarobki'].','.'"'.$_POST['data_urodzenia'].'"'.')';


if ($conn->query($sql) === TRUE) {
 header('Location: https://sebastian-swoboda.herokuapp.com/danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
