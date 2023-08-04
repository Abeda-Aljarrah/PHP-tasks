<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:lightgray;
        }
        div{
            display: flex;
            align-items: center;
            justify-content: center;
            background: #accffe;
            height: 450px;
            width: 700px;
            margin: 100px;
            border-radius: 50px;
            border: black solid 2px;
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
        
        h1{
            text-align: center;
            font-size: 40px;
            color:black;
            margin-bottom: 70px;
        }
        label{
            font-size: 25px;
            margin-left: 100px;
        }
        button{
            width: 100px;
            height: 50px;
            margin-top: 30px;
            text-align: center;
            margin-left: 300px;
            border-radius: 10px;
            background-color: lightgrey;
            font-size: 20px;
        }
        #login-container .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        #login-container .error-message a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }

        #login-container .error-message a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="login-container">
        
        <form method="post" action="index.php">
            <h1> Do you have an account? </h1>
            <label for="username">User Name:</label> <br>
            <input type="text" name="username" required> <br>
            <label for="password">Password:</label> <br>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <?php

    $Name = "Abeda";
    $Pass="1234";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $submitted_username = $_POST['username'];
        $submitted_password = $_POST['password'];
    
    
        if ($submitted_username === $Name && $submitted_password === $Pass) {
    
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $submitted_username;
    
            header('Location: calculator.php');
        
        } else {
            // Invalid credentials, show an error message
            echo "<p class='error-message'>Invalid username or password. <a href='http://localhost/PHP-tasks/calculator%20php/'>Please try again.</a></p>";
        }
    }
    ?>
</body>
</html>