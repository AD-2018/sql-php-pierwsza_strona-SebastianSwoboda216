<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="h1">
<a href="../index.php">Menu</a>
<a href="tytul.php">Dodawaie tytulu</a>
</div>
<?php 
require_once("../connect.php"); 
echo("<h1>Tytuł</h1>"); 
$sql = "select * from biblTytul";
echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id</th><th>tytul</th></tr>");
while ($row = mysqli_fetch_assoc($result)) {
echo("<tr>");     
echo("<tr>");   
echo ('<td>'.$row["id"].'</td><td>'.$row["tytul"].'</td>');
echo("<tr>"); 
echo("</tr>"); } 
echo('</table>');	
echo("<h1>Autor</h1>"); 
$sql = "select * from biblAutor";
echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id</th><th>autor</th></tr>");
while ($row = mysqli_fetch_assoc($result)) {
echo("<tr>");     
echo("<tr>");   
echo ('<td>'.$row["id"].'</td><td>'.$row["autor"].'</td>');
echo("<tr>"); 
echo("</tr>"); } 
echo('</table>'); 
?> 
</html>  
