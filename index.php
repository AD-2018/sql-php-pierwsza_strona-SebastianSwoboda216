<!DOCTYPE html>
<html>
<head>
<title>Sebastian Swoboda 3 Ti</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Sebastian Swoboda</h1>
    <div class="nav">
    <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SebastianSwoboda216">github</a></li>
    <li><a href="pracownicy/pracownicyorg.php">Pracownicy Organizacja.</a></li>
    <li><a href="pracownicy/fagregujace.php">Funkcje Agregujące</a></li>
    <li><a href="pracownicy/pracownicy.php">Pracownicy</a></li>
    <li><a href="pracownicy/dataczas.php">Data i czas</a></li>
    <li><a href="pracownicy/form.php">Formularz</a></li>
    <li><a href="pracownicy/form2.php">Formularz osobowy</a></li>
    <li><a href="pracownicy/danedobazy.php">Usuwanie dodawanie</a></li>
    <li><a href="biblioteka/biblksiazki.php">Biblioteka Ksiazki</a></li>
</div>     
<?php
require_once("connect.php");
echo("<h1>Tabelka Pracownicy</h1>");

    
$sql = "INSERT INTO pracownicy (imie,dzial,zarobki) 
   VALUES ('Sebastian','2','38')";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$result = mysqli_query($conn, $sql);
if ( $result) {
     echo "<br>";
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }    
 $sql = "SELECT * from pracownicy";
 echo($sql);
 
 $result = mysqli_query($conn, $sql);
 if ( $result) {
         echo "<li>ok";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
 
echo("<table border='1'>");
echo("<th>Imie</th><th>Zarobki</th><th>Dzial</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['dzial']."</td>");
        echo("</tr>");
    };
echo("</table>");
echo ("<br>");

 echo("<h2>Czas</h2>");
echo (date("Y-m-d h:i:sa", $d));
echo("<br>");
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
</body>
</html>
