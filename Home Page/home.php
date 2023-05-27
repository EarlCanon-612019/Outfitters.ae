<?php 
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    die();
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>

</head>
<body>

    <section class="home">
    <!-- NAV BAR -->
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="uil uil-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="..\Profile Page\index.php">Profile</a></li>
                    <li><a href="..\Membership page\Membership page.php">Membership</a></li>
                    <li><a href="..\Calendar Page\Calendar Page\index.php"><ion-icon name="star"></ion-icon>Calendar</a></li>
                    <li><a href="..\About Page\about page\about.php">About</a></li>
                    <li><a href="..\logout.php">Log Out</a></li>
                </ul>
            </div>
            <i class="uil uil-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <!-- JAVASCRIPT -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

    <!-- FEED -->
    <section class="feed">
        <h1>FEATURED COLLECTION</h1>
        <hr>

        <div class="row1">
            <div class="feed-collection">
                <img src="images/image-1.jpg">
            </div>

            <div class="feed-collection">
                <img src="images/image-2.jpg">
            </div>

            <div class="feed-collection">
                <img src="images/image-3.jpg">
            </div>
        </div>
    </section>

        <h1>Other Posts</h1>
        <div class="feed-collection2">
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>

                <div class="carousel">
                <img src="images/image-4.jpg" alt="img" draggable="false">
                <img src="images/image-5.jpg" alt="img" draggable="false">
                <img src="images/image-6.jpg" alt="img" draggable="false">
                <img src="images/image-7.jpg" alt="img" draggable="false">
                </div>

                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>

    <!--FOOTER-->
    <footer>
        <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
        <li><a href="#"><ion-icon name="logo-pinterest"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-google"></ion-icon></ion-icon></a></li>
        </ul>

        <ul class="menu">
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">How to order</a></li>
        <li><a href="#">How to Track</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        <p>@2023 Outfitters | Al Shamel Street - Sheikh Mohamed Bin Salem Rd - Al Dhait South - Ras Al Khaimah</p>
    </footer>
    </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>