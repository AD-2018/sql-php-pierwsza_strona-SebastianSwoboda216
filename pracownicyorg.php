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
   
?>
</body>
</html>
