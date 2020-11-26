<?php
echo("Usuwanie<br>");
echo $_POST['id'];

require_once("connect.php");


$sql = "DELETE FROM pracownicy WHERE id=".$_POST['id'];


if ($conn->query($sql) === TRUE) {
  echo $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
