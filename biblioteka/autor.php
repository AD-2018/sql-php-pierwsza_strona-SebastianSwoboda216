<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");
$sql = "INSERT INTO biblTytul (id,tytul) 
       VALUES (null,".'"'.$_POST['tytul'].'"'.')';
if ($conn->query($sql) === TRUE) {
  header('Location: https://sebastian-swoboda.herokuapp.com/biblioteka/biblksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>