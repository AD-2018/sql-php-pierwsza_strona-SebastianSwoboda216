  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
    <a href="index.php">menu</a>
    <a href="pracownicyorg.php">Pracownicy Organizacja.</a>
    <a href="fagregujace.php">Funkcje Agregujące</a>
    <a href="dataczas.php">Data i czas</a>
</div>
<?php

require_once("connect.php");
    
$sql ="select imie,dzial from pracownicy,organizacja where id_org=dzial and dzial=2 group by imie"; 
echo ("<li>".$sql."</li><br><br>");
echo("<h3>1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");     
echo("<tr>");     
echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
echo("<tr>"); 
echo("</tr>"); } 
echo('</table>'); 
  
$sql ="select imie,dzial from pracownicy,organizacja where id_org=dzial and dzial=2 or dzial=3 group by imie";
echo ("<li>".$sql."</li><br><br>");
echo("<h3>2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");     
echo("<tr>");     
echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
echo("<tr>"); 
echo("</tr>"); } 
echo('</table>'); 
    
$sql ="select imie, zarobki from pracownicy,organizacja where id_org=dzial group by imie having zarobki<30";
echo ("<li>".$sql."</li><br><br>");
echo("<h3>3</h3>"); 
$result = mysqli_query($conn, $sql); 
if ( $result) {
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");     
echo("<tr>");     
echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");     
echo("<tr>"); 
echo("</tr>"); } 
echo('</table>');   
    
?>
</body>
</html>
