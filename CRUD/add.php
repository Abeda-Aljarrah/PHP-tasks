<?php 
include_once 'php.php';

$ProductName=$_POST['ProductName'];
$CategoryID=$_POST['CategoryID'];
$QuantityPerUnit=$_POST['QuantityPerUnit'];
$UnitPrice=$_POST['UnitPrice'];

$sql = "INSERT INTO products ( ProductName, CategoryID, QuantityPerUnit, UnitPrice) VALUES ('$ProductName', '$CategoryID', '$QuantityPerUnit', '$UnitPrice');";
mysqli_query($conn, $sql);

header("Location: sql.php");
?>