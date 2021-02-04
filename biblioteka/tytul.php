  
<?php
echo "<li>". $_POST['tytul'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO bibl_tytul (id_tytul,tytul) 
VALUES (null, '".$_POST['tytul']."')";
echo "<li>". $sql;
if ($conn->query($sql) === TRUE) {
header ('Location:https://sebastian-swoboda.herokuapp.com/biblioteka/biblksiazki.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 