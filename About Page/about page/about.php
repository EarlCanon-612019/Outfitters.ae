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
                    <li><a href="..\..\Home Page\home.php">Home</a></li>
                    <li><a href="..\..\Profile Page\index.php">Profile</a></li>
                    <li><a href="..\..\Membership page\Membership page.php">Membership</a></li>
                    <li><a href="..\..\Calendar Page\Calendar Page\index.php"><ion-icon name="star"></ion-icon>Calendar</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="..\..\logout.php">Log Out</a></li>
                </ul>
            </div>

            <i class="uil uil-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    
    <div class="center">
        <div class="about">
            <h1>ABOUT US</h1>
            <p>Welcome to our website, where we aim to provide a platform for fashion enthusiasts to organize their outfits, reduce their environmental impact, be a member of the organization in order to have the unlimited access to organize and upload all of your clothes in one platform.</p>
            <br>
            <p>At our core, we believe that fashion should be sustainable and ethical, and that we all have a responsibility to reduce our carbon footprint. That's why we've created a space where you can find a community of like-minded individuals who share these values.</p>
            <br>
            <p>Our platform allows you to easily organize your wardrobe, mix and match outfits, and get inspiration from others by visiting user profile of different people or friends you can collaborate with.</p>
            <br>
            <p>Join our community today and start organizing your wardrobe, finding new favorite pieces, and making a difference in the world of fashion.</p>
        </div>
    </div>
    
    <div class="container">
        <h2 class="title">MEET OUR TEAM</h2>
        <div class="team">
            <div>
                <img src="images/earl.jpg"> 
                <h3>Earl Cañon</h3>
                <p>HTML/PHP coding</p>
            </div>
            <div>
                <img src="images/charles.jpg">
                <h3>Charles Raquedan</h3>
                <p>Database/PHP coding</p>
            </div>

            <div>
                <img src="images/brian.jpg">
                <h3>Brain Moya</h3>
                <p>HTML coding</p>
            </div>
            <div>
                <img src="images/dave.jpg">
                <h3>Dave Lascano</h3>
                <p>Design Prototype</p>
            </div>

            <div>
                <img src="images/thea.jpg">
                <h3>Thea Narca</h3>
                <p>Design Prototype</p>
            </div>
            <div>
                <img src="images/janna.jpg">
                <h3>Joanna Domingo</h3>
                <p>Design Prototype</p>
            </div>
            <div>
                <img src="images/blanche.jpg">
                <h3>Blanche Balaba</h3>
                <p>Design Prototype</p>
            </div>
        </div>
    </div>
    

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

    <footer>
        <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
        <li><a href="https://pin.it/4Zchugx"><ion-icon name="logo-pinterest"></ion-icon></a></li>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>