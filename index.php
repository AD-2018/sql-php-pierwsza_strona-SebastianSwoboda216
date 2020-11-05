<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SebastianSwoboda216">github</a>
    <h1>Sebastian Swoboda</h1>
<?php
 

$conn= new mysqli("sebastianswoboda1.alwaysdata.net","217205","Dziwaczek123","sebastianswoboda1_uwagatojestbazadanych");  
$sql ="select * from pracownicy"; 
        $result = mysqli_query($conn, $sql);  
            echo('<table border="1"'); 
            echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
            while($row=mysqli_fetch_assoc($result)){ 
                echo("<tr>");     
                echo("<tr>");     
                echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");     
                echo("<tr>"); 
                echo("</tr>"); } 
                echo('</table>'); 

?>
</body>
</html>
