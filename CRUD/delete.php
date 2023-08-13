<?php 
include_once 'php.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $delete = "DELETE FROM `products` WHERE `ProductID`= '$id'";
    $result = mysqli_query($conn, $delete);
    if ($result){
        header("Location: sql.php");
    }else{
        echo("not deleted");
    }


}

?>