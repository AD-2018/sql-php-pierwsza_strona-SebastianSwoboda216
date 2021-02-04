<!DOCTYPE html>
<html>
<head>
<title>Sebastian Swoboda 3 Ti</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="nav">
    <li><a href="../index.php">menu</a></li>
    <li><a href="pracownicyorg.php">Pracownicy Organizacja.</a></li>
    <li><a href="pracownicy.php">Pracownicy</a></li>
    <li><a href="dataczas.php">Data i czas</a></li>
</div>
<?php
require_once("../connect.php");

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
    
echo("<h3>4</h3>");     
$sql ="select Avg(zarobki) from pracownicy where imie not like '%a'"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>5</h3>");      
$sql ="select Avg(zarobki) from pracownicy where dzial=4"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow z Dzialu 4</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>6</h3>");       
$sql ="select Avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn z Dzialu 1 i 2</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>7</h3>");       
$sql ="select Count(imie) from pracownicy"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Count(imie)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>8</h3>");       
$sql ="select Count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Kobiet z Dzialu 1 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['Count(imie)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
    
echo("<h2>Pogrupowane</h2>");
    
echo("<h3>1</h3>"); 
$sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 

echo("<h3>2</h3>");
$sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 

echo("<h3>3</h3>");     
$sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>4</h3>");               
$sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['plec']."</td><td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
                   
echo("<h3>5</h3>"); 
$sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['plec']."</td><td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
      
echo("<h2>having</h2>");
    
echo("<h3>1</h3>");
$sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Sum(zarobki)<28"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow < 28</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 

echo("<h3>2</h3>");     
$sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org and imie not like '%a' group by nazwa_dzial having Avg(zarobki)>30"; 
echo ("<li>".$sql."</li><br><br>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow Mezczyzn > 30</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
echo("</tr>"); } 
echo('</table>');
    
echo("<h3>3</h3>");
$sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Count(imie)>3"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow > 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
