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
        #container{
            display: flex;
            flex-direction: column; /* Added to make the content appear in a column */
            align-items: center;
            justify-content: center;
            background: #accffe;
            height: 450px;
            width: 700px;
            margin: 100px;
            border-radius: 50px;
            border: black solid 2px;
        }
        p{
            display: block;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php if (isset($_GET["output"])): ?>
        <?php $output = $_GET["output"]; ?>
        <p>Your output is: <?php echo $output; ?></p>
        <br>
        <?php else: ?>
        <p>No output available.</p>
        <?php endif; ?>
        <br>
        <div>
            <p><a href="calculator.php">Go Back</a></p>
        </div>
        
    </div>
</body>
</html>