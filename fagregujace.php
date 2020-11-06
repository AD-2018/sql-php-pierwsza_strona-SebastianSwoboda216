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
</body>
</html>
