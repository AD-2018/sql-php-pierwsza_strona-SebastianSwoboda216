<?php
require_once("connect.php");




if ($conn->query($sql) === TRUE) {
  echo $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
