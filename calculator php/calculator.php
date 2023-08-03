<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:lightgray;
        }
        div{
            background: #accffe;
            height: 400px;
            width: 700px;
            margin: 100px;
            border-radius: 50px;
            border: black solid 2px;
            padding: 30px;
        }
        input{
            font-size: 25px;
            text-align: center;
            width: 500px;
            height: 40px;
            color: #666;
            font-family: "Muli-SemiBold";
            border-radius: 10px;
            margin-left: 100px;

        }
        label{
            display: inline-block;
            font-size: 25px;
            margin-left: 100px;
            margin-top: 10px;

        }
        button{
            width: 100px;
            height: 50px;
            margin-top: 30px;
            text-align: center;
            margin-left: 60px;
            border-radius: 10px;
            background-color: lightgrey;
            font-size: 20px;
        }
        .out{
            display: inline-block;
            margin-top: 30px;

        }
        
    </style>
</head>
<body>

<?php
    $_SESSION["variable1"] = $_GET["variable1"] ?? null;
    $_SESSION["variable2"] = $_GET["variable2"] ?? null;

    $num1 = $_SESSION["variable1"];
    $num2 = $_SESSION["variable2"];

    function add($num1, $num2) {
        return $num1 + $num2;
    }

    function sub($num1, $num2) {
        return $num1 - $num2;
    }

    function multi($num1, $num2) {
        return $num1 * $num2;
    }

    function divide($num1, $num2) {
        return $num1 / $num2;
    }

    $output = null; // Variable to store the output

if ($_SERVER["REQUEST_METHOD"] === "GET" && $num1 !== null && $num2 !== null) {
    if (isset($_GET['add']) && is_numeric($num1) && is_numeric($num2)) {
        $output = add($num1, $num2);
    } elseif (isset($_GET['sub']) && is_numeric($num1) && is_numeric($num2)) {
        $output = sub($num1, $num2);
    } elseif (isset($_GET['multi']) && is_numeric($num1) && is_numeric($num2)) {
        $output = multi($num1, $num2);
    } elseif (isset($_GET['divide']) && is_numeric($num1) && is_numeric($num2) && $num2 != 0) {
        $output = divide($num1, $num2);
    } else {
        $output = "Invalid input";
    }
    $_SESSION["output"] = $output; // Store output in session
    // Redirect to checkout.php with the output as a query parameter
    if (isset($output)) {
        header('Location: checkout.php?output=' . $output);
        exit; // Make sure to exit after redirecting
    }
} else {
    // If there is no calculation, check if there is any previous output in the session
    if (isset($_SESSION["output"])) {
        $output = $_SESSION["output"];
    }
}
    ?>

    <div>
        <form action="" method="get">
            <label for="variable1"> enter the first number:</label>
            <br>
            <input type="text" name="variable1">
            <br>
            <label for="variable2"> enter the second number:</label>
            <br>
            <input type="text" name="variable2">
            <br>
            <button type="submit" name="add">Add</button>
            <button type="submit" name="sub">Subtracts</button>
            <button type="submit" name="multi">Multiply</button>
            <button type="submit" name="divide">Divide</button>
            
        </form>
        <?php if (isset($output)): ?>
        <label class="out">Output:</label>
        <br>
        <input type="text" name="output" value="<?php echo $output; ?>" readonly>
        <?php endif; ?> 
        
    </div>


</body>
</html>