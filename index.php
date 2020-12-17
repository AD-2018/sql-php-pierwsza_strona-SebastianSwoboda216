<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sebastian Swoboda</h1>
    <div class="nav">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SebastianSwoboda216">github</a>
    <a href="pracownicyorg.php">Pracownicy Organizacja.</a>
    <a href="fagregujace.php">Funkcje Agregujące</a>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="dataczas.php">Data i czas</a>
    <a href="form.php">Formularz</a>
    <a href="form2.php">Formularz osobowy</a>
    <a href="strona.php">Strona</a>
    <a href="danedobazy.php">Usuwanie dodawanie</a>
    <a href="test.php">test</a>
    <a href="biblksiazki.php">Biblioteka Ksiazki</a>
        
<?php
require_once("connect.php");
echo ('<h2>Rozwijana Tabela<h2>');
$sql ="select * from pracownicy";
$result = mysqli_query($conn, $sql);
if ( $result) {
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<select name="pracownik">');
while($row = mysqli_fetch_assoc($result)) {
echo '<option value="'.$row['id_pracownicy'].'">';
echo($row['imie'].', '.$row['zarobki'].', '.$row['data_urodzenia'].', '.$row['dzial']);
echo "</option>";
};
echo('</select>');
echo ('<br>');
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
echo("<table border='1'>");
echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th>");
while($row = mysqli_fetch_assoc($result)) {
echo("<tr>");
echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
echo("</tr>");
};
echo("</table>");
?>
</div>
</body>
</html>
