<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
    <a href="index.php">menu</a>
</div>
<?php
require_once("connect.php");

echo("<h3>1</h3>"); 
$sql ="select Sum(zarobki) from pracownicy"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 

echo("<h3>2</h3>"); 
$sql ="select Sum(zarobki) from pracownicy where imie like '%a'";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>3</h3>"); 
$sql ="select Sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Mezczyzn z Dzialow 2 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
