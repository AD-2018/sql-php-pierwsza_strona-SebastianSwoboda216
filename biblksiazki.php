<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "nav">
</div>
<?php   
require_once("connect.php");
echo("<h3> Biblioteka </h3>");
$sql = "SELECT * FROM bibl_book";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
echo ("<tr><th>ID</th><th>Pisarz</th><th>Powiesc</th><th>Wypozyczenia</th></tr>");
while ($row = mysqli_fetch_assoc($result)) {
echo ('<tr>');
echo ('<td>'.$row["id_book"].'</td><td>'.$row["pisarz"].'</td><td>'.$row["powiesc"].'</td><td>'.$row["wypoz"].'</td>');
echo ('</tr>'); }
echo ('</table>');
    
echo("<h3> Autor </h3>");
$sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
echo ("<tr><th>ID</th><th>Autor</th></tr>");
while ($row = mysqli_fetch_assoc($result)) {
echo ('<tr>');
echo ('<td>'.$row["id_autor"].'</td><td>'.$row["autor"].'</td>');
echo ('</tr>'); }
echo ('</table>');
    
echo("<h3> Tytuł </h3>");
$sql = "SELECT * FROM bibl_tytul";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
echo ("<tr><th>ID</th><th>ksiazka</th></tr>");
while ($row = mysqli_fetch_assoc($result)) {
echo ('<tr>');
echo ('<td>'.$row["id_tytul"].'</td><td>'.$row["tytul"].'</td>');
echo ('</tr>'); }
echo ('</table>');
  
?>
</body>
</html>
    
