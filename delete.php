<?php
echo("Usuwanie<br>");
echo $_POST['id'];

require_once("connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Pracownik WHERE id= $_POST['id'];";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
