<!DOCTYPE html>
<html>
<head>
<title>Grid 1</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="Grid.css">
</head>
<body>
<strong>
<div class="str1">
<div class="str1A">
<?php
require_once("../connect.php");
$sql = "SELECT * FROM biblTytul";
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, $sql);

