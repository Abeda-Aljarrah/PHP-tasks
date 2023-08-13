<?php
// Retrieve the stored inputs from the session
session_start();
$inputs = isset($_SESSION["inputs"]) ? $_SESSION["inputs"] : array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="view.css">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="view.php">Catagories</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>

        </nav>

    </header>

    <div class="cards-container">
        <?php
        if(!empty($inputs)){
            foreach ($inputs as $inputData) {
                ?>
                <div class="card">
                    <div class="image-wrapper">
                        <img src="image/kiwifruit-clip-art-kiwi-d6571781c4a6f133478d6d91d368c31e.png" alt="Product Photo" style="width: 100px; height: 100px;">
                    </div>
                    
                    <h2><?php echo $inputData["name"]; ?></h2>
                    <p><strong>Price:</strong> $<?php echo $inputData["price"]; ?></p>
                    <p><strong>Details:</strong> <?php echo $inputData["details"]; ?></p>
                    <p><strong>Date:</strong> <?php echo $inputData["date"]; ?></p>
                </div>
    
            <?php
            }
        }else{
            echo "<div id='div'>THERE IS NO PRODUCT</div>";
        };
            ?>
        
    </div>

    <a href="index.php"><button id="index-btn" name="index">Go back</button></a>


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

</body>

</html>
