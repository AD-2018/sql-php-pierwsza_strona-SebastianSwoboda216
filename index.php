<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SebastianSwoboda216"</a>
    <h1>Sebastian Swoboda</h1>
<?php

$conn = new mysqli("mysql-sebastianswoboda1.alwaysdata.net","217205","TeczeImotylki123","sebastianswoboda1_uwagatojestbazadanych");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


?>
</body>
</html>
