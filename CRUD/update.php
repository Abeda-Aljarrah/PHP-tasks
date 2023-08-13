<?php 
include_once 'php.php';
$id=$_GET['updateid'];
if (isset($_POST['submit'])){
    $ProductName=$_POST['ProductName'];
    $CategoryID=$_POST['CategoryID'];
    $QuantityPerUnit=$_POST['QuantityPerUnit'];
    $UnitPrice=$_POST['UnitPrice'];
    
    $up = "UPDATE products SET ProductName='$ProductName', CategoryID='$CategoryID', QuantityPerUnit='$QuantityPerUnit', UnitPrice='$UnitPrice' WHERE ProductID=$id";
    $result = mysqli_query($conn, $up);
    if ($result){
        header("Location: sql.php");
    }else{
        echo("not Updated");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Update Data</h2>
    <form method="post">
        
        <label for="ProductName">ProductName:</label>
        <input type="text" id="ProductName" name="ProductName"><br>
        
        <label for="CategoryID">CategoryID:</label>
        <input type="text" id="CategoryID" name="CategoryID"><br>
        
        <label for="QuantityPerUnit">QuantityPerUnit:</label>
        <input type="text" id="QuantityPerUnit" name="QuantityPerUnit"><br>
            
        <label for="UnitPrice">UnitPrice:</label>
        <input type="text" id="UnitPrice" name="UnitPrice"><br>
        
        <button type="submit" value="submit" name="submit">Update</button>
        
    </form>
</body>
</html>