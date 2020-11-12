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
echo("<h2>pracownicy  organizacja</h2>");
$sql ="select * from pracownicy,organizacja where id_org=dzial group by imie";
echo ("<li>".$sql."</li><br><br>");
echo("<h3>1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 

echo("<h3>2</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial group by imie having dzial=1 or dzial=4";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
   
echo("<h3>3</h3>");
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' group by imie";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
          
echo("<h3>4</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by imie";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
    
echo("<h2>SORTOWANIE</h2>");  
    
echo("<h3>1</h3>");   
$sql ="select * from pracownicy,organizacja where id_org=dzial order by imie desc";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
              
echo("<h3>2</h3>");     
$sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=3 order by imie asc";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
              
echo("<h3>3</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' order by imie asc"; 
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
              
echo("<h3>4</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' having (dzial=1 or dzial=3) order by imie asc";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
                  
echo("<h3>5</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' order by dzial asc, zarobki asc";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");       
echo("</tr>"); } 
echo('</table>'); 
            
echo("<h2>LIMIT</h2>"); 
   
echo("<h3>1</h3>");    
$sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 0, 2";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
   
echo("<h3>2</h3>"); 
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like'%a' and (dzial=4 or dzial=3) order by zarobki desc limit 0, 3";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
   
echo("<h3>3</h3>");  
$sql ="select * from pracownicy,organizacja where id_org=dzial order by data_urodzenia asc limit 0, 1";
echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
if ( $result) {
echo "<br>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa dzialu</th><th>data urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
echo("<tr>");         
echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");     
echo("</tr>"); } 
echo('</table>'); 
   
?>
</body>
</html>
