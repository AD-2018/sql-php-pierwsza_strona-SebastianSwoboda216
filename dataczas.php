<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
    <div class="nav">
    <a href="index.php">menu</a>
</div>
<?php
require_once("connect.php");
    

echo("<h2>Data Czas</h2>");
    
echo("<h3>1</h3>");    
$sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial"; 
echo ("<li>".$sql."</li><br><br>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
    
echo("<h3>2</h3>");               
$sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial and dzial=1"; 
echo ("<li>".$sql."</li><br><br>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>3</h3>");          
$sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial"; 
echo ("<li>".$sql."</li><br><br>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Suma']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>4</h3>");               
$sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and dzial=2"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Dzialu Handel</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Suma']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>5</h3>");               
$sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie like'%a'"; 
echo ("<li>".$sql."</li><br><br>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Suma']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>6</h3>");                
$sql ="select *,AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Wieku</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>7</h3>");                
$sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>8</h3>");                     
$sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>9</h3>");                                 
$sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>10</h3>");                                          
$sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>11</h3>");                                                   
$sql ="select *,DATEDIFF(CURDATE(),data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dlugosc Zycia w Dniach</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>12</h3>");                              
$sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and imie not like '%a'"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Najstarsz Pracownik</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h2>Formatowanie Dat</h2>")
  
echo("<h3>1</h3>");     
$sql ="select *,DATE_FORMAT(data_urodzenia,'%W-%m-%Y') from pracownicy,organizacja where id_org=dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<li>".$sql."</li>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
