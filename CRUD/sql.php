<?php
include_once 'php.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <?php
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($conn, $sql);
    $resulCheck = mysqli_num_rows($result);


    echo "<button><a href='proup.php' >ADD</a></button>";
    echo "<table>
     <tr>
     <th>ProductID</th>
     <th>ProductName</th>
     <th>CategoryID</th>
     <th>QuantityPerUnit</th>
     <th>UnitPrice</th>
     <th>Delete</th>
     <th>Update</th>
     </tr>";

    if ($resulCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
             <td>" . $row['ProductID'] . "</td>
             <td>" . $row['ProductName'] . "</td>
             <td>" . $row['CategoryID'] . "</td>
             <td>" . $row['QuantityPerUnit'] . "</td>
             <td>" . $row['UnitPrice'] . "</td>
             <td><button><a href='delete.php?deleteid=". $row['ProductID'] . "'>Delete</a></button></td>
             <td><button><a href='update.php?updateid=". $row['ProductID'] . "'>Update</a></button></td>
             </tr>";
        }
    }
    echo "</table>";
    ?>
</body>

</html>