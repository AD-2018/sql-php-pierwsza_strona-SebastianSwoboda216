  
<?php
echo "<li>". $_POST['tytul'];
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