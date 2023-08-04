<?php
session_start();

// Initialize an empty array to store the inputs
if (!isset($_SESSION["inputs"])) {
    $_SESSION["inputs"] = array();
}

// Handle form submission and add input data to the array
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $inputData = array(
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "details" => $_POST["details"],
        "date" => $_POST["date"],
        // "photo" => $_POST["photo"], // Assuming you are storing the image file path here
    );

    // Add the new input data to the beginning of the array
    array_unshift($_SESSION["inputs"], $inputData);

    header("Location: " . $_SERVER["PHP_SELF"] . "?" . uniqid());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <header>
        <nav id="nav">
            <a href="#">
                <img src="image/green-garden-high-resolution-logo-color-on-transparent-background (3).png" alt="logo" id="logo">
            </a>
            <label for="menu-toggle" id="menu-icon">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" id="menu-toggle" />
            <ul id="nav-item">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Catagories</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>

        </nav>


    </header>

    <form action="" method="post">
        <div class="formcontainer">
            <h1>Add products</h1>
            <hr />
            <div class="container">
                <label for="name"><strong>Name</strong></label>
                <br>
                <input type="text" placeholder="Enter Name" name="name" required>
                <br>
                <label for="price"><strong>Price</strong></label>
                <br>
                <input type="text" placeholder="Enter Price" name="price" required>
                <br>
                <label for="details"><strong>Details</strong></label>
                <br>
                <input type="text" placeholder="Enter Details" name="details" required>
                <br>
                <label for="date"><strong>Date</strong></label>
                <br>
                <input type="text" placeholder="Enter Date" name="date" required>
                <br>
                <label for="photo"><strong>Photo</strong></label>
                <br>
                <input type="image" src="image/kiwifruit-clip-art-kiwi-d6571781c4a6f133478d6d91d368c31e.png" placeholder="Enter Photo" name="photo" style="width: 100px; height: 100px;" required>
                <br>
            </div>
            <button type="submit" name="submit">Add</button>
        </div>
    </form>

    <?php
    // Display all input data in the table only if there is new form submission
    if (count($_SESSION["inputs"]) > 0) {
        echo '<table border="1" class="table">
        <tr class="table-header">
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
            <th>Date</th>
            <th>Photo</th>
        </tr>';

        foreach ($_SESSION["inputs"] as $inputData) {
            echo '<tr>';
            echo '<td>' . $inputData["name"] . '</td>';
            echo '<td>' . $inputData["price"] . '</td>';
            echo '<td>' . $inputData["details"] . '</td>';
            echo '<td>' . $inputData["date"] . '</td>';
            echo '<td><img src="image/kiwifruit-clip-art-kiwi-d6571781c4a6f133478d6d91d368c31e.png" alt="Product Photo" style="width: 100px; height: 100px;"></td>';
            echo '</tr>';
        }

        echo '</table>';
    }
    ?>
        <a href="view.php"><button id="view-btn" name="view">View page</button></a>
    <?php
        
    ?>
    <div class="footer-container">

        <footer>
            <div>
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div>
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div>
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Grocery</a></li>
                </ul>
            </div>
            <div>
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
        </footer>
    </div>
    <?php
    
    ?>
</body>
</html>