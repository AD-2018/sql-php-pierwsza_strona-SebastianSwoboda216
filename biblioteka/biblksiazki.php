<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php   
require_once("connect.php");
$sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
echo("<table border='1' class='tabela'>");
while($row = mysqli_fetch_assoc($result)) {
echo("<tr>");
echo("<td>".$row['biblWypoz']."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td>");  
?>
</body>
</html>
    
