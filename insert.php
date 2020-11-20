<?php
echo("jestes w insert.php <br>");
echo $_POST['name'];
echo $_POST['dzial'];
echo $_POST['zarobki'];
echo $_POST['data_urodzenia'];

$servername = "mysql-sebastianswoboda1.alwaysdata.net";
$username = "217205";
$password = "TeczeImotylki123";
$dbname = "sebastianswoboda1_uwagatojestbazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null, 
					$_POST['name'], 
					$_POST['dzial'], 
					$_POST['zarobki'],
					$_POST['data_urodzenia']
				";

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
