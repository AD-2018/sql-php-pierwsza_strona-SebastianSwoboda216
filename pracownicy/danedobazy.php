<html>
<head>
<title>Sebastian Swoboda 3 Ti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="../style.css">
  <title>Prosty Formularz</title>
</head>
<body>
<li><a href="index.php">menu</a></li>
<h1>Dodawanie i usuwanie</h1>
<h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">
	<form action="insert.php" method="POST">
	Imie:<input class="input" type="text" name="imie"><br>
	Dział:<input class="input" type="text" name="dzial"></br>
	Zarobki:<input class="input" type="text" name="zarobki"></br>
	Data Urodzenia:<input class="input" type="text" name="data_urodzenia"></br>
	<input class="input" type="submit" value="dodaj pracownika">
</form>
</form>
<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
	ID<input class="input" type="number" name="id"></br>
   <input type="submit" value="USUŃ">
 </form>
<?php
require_once("../connect.php");
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
echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th><th>Usuń Pracownika</th>");
while($row = mysqli_fetch_assoc($result)) {
echo('<tr>');
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
'<td>
<form action="delete.php" method="POST">
<input name="id" value="'.$row['id_pracownicy'].'" hidden>
<input type="submit" value="kaput">
</form>
</td>');
echo('</tr>');
}
echo('</table>');
?>
</body>
</html>
