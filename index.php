<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SebastianSwoboda216">github</a>
    <h1>Sebastian Swoboda</h1>
<?php

$conn = new mysqli("mysql-sebastianswoboda1.alwaysdata.net","217205","TeczeImotylki123","sebastianswoboda1_uwagatojestbazadanych");
$sql ="select * from pracownicy";
$result = mysqli_query($conn, $sql);
    
 echo ('<table border = "1">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
  $sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)<35"; 
        echo("<h3>1</h3>"); 
            $result = mysqli_query($conn, $sql);  
                echo('<table border="1"'); 
                echo ("<tr><th>avg(zarobki)</th><th>nazwa_dzial</th></tr>"); 
        while($row=mysqli_fetch_assoc($result)){ 
                echo("<tr>");     
                echo("<tr>");     
                echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");     
                echo("<tr>"); 
                echo("</tr>"); } 
                echo('</table>'); 
    
    $sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial having avg(zarobki)<40"; 
            echo("<h3>2</h3>"); 
                $result = mysqli_query($conn, $sql);  
                echo('<table border="1"'); 
                echo ("<tr><th>avg(zarobki)</th><th>nazwa_dzial</th></tr>"); 
        while($row=mysqli_fetch_assoc($result)){ 
                echo("<tr>");     
                echo("<tr>");     
                echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");     
                echo("<tr>"); 
                echo("</tr>"); } 
                echo('</table>'); 
    
    $sql ="select imie, zarobki from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by imie having zarobki<40"; 
            echo("<h3>3</h3>"); 
                $result = mysqli_query($conn, $sql);  
                echo('<table border="1" class="tabela"'); 
                echo ("<tr><th>imie</th><th>zarobki</th></tr>"); 
        while($row=mysqli_fetch_assoc($result)){ 
                 echo("<tr>");     
                 echo("<tr>");     
                 echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");     
                 echo("<tr>"); 
                 echo("</tr>"); } 
                 echo('</table>');  
     
    $sql ="select * from pracownicy,organizacja where id_org=dzial group by imie having dzial=2 or dzial=3"; 
            echo("<h3>4</h3>"); 
                $result = mysqli_query($conn, $sql);  
                echo('<table border="1" class="tabela"'); 
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
