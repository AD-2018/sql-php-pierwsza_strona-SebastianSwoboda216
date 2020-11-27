<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
  <title>Prosty Formularz</title>
</head>
<body>
<h1>Dodawanie i usuwanie</h1>
<h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">
	<form action="insert.php" method="POST">
	Imie:</g><input type="text" name="imie"><br>
	Dział:</g><input type="text" name="dzial"></br>
	Zarobki:</g><input type="text" name="zarobki"></br>
	Data Urodzenia:</g><input type="text" name="data_urodzenia"></br>
	<input type="submit" value="dodaj pracownika">
</form>
</form>
<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
	<g>ID</g><input type="number" name="id"></br>
   <input type="submit" value="USUŃ">
 </form>
 <a href="index.php">menu</a>
<?php
require_once("connect.php");
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo("<h1>Tabela</h1>");
echo("<table border='1'>");
echo("<th>id</th><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th><th>nazwa dzialu</th>");
while($row = mysqli_fetch_assoc($result)) {
echo("<tr>");
echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
echo("</tr>");
};
echo("</table>");
?>
</body>
</html>
