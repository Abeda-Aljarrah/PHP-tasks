<?php 
include_once 'php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($conn, $sql);
    ?>
<h2>Insert Data</h2>
    <form action="add.php" method="post">
        
        <label for="ProductName">ProductName:</label>
        <input type="text" id="ProductName" name="ProductName"><br>
        
        <label for="CategoryID">CategoryID:</label>
        <input type="text" id="CategoryID" name="CategoryID"><br>
        
        <label for="QuantityPerUnit">QuantityPerUnit:</label>
        <input type="text" id="QuantityPerUnit" name="QuantityPerUnit"><br>
            
        <label for="UnitPrice">UnitPrice:</label>
        <input type="text" id="UnitPrice" name="UnitPrice"><br>
        
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>