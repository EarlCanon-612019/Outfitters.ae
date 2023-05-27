<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <nav>
        <a href="index.php"><img src="logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="uil uil-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="..\Home Page\home.php">Home</a></li>
                <li><a href="..\Profile Page\index.php">Profile</a></li>
                <li><a href="Membership page.php">Membership</a></li>
                <li><a href="..\Calendar Page\Calendar Page\index.php"><ion-icon name="star"></ion-icon>Calendar</a></li>
                <li><a href="..\About Page\about page\about.php">About</a></li>
                <li><a href="..\logout.php">Log Out</a></li>
            </ul>
        </div>
    
        <i class="uil uil-bars" onclick="showMenu()"></i>
    </nav>

	<section class="container">
		<div class="card">
			<div class="card-image car-1"></div>
				<h3>FREE MEMBERSHIP</h3>
				<ul>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Limited profile folders</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Share outfit combination to feed</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Advertisements </li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> 7-days Free Access To Calendar </li>
                </ul>
			<a href="">CURRENT MEMBERSHIP</a>
		</div>
		<div class="card">
			<div class="card-image car-2"></div>
				<h3>MONTHLY MEMBERSHIP</h3>
				<ul>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Unlimited profile folders</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Share outfit combination to feed</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> No Advertisements </li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> 30% off on First Two Months </li>

    
                </ul>
                <a href="">BECOME A MEMBER 9.99$</a>
		</div>
		<div class="card">
			<div class="card-image car-3"></div>
				<h3>YEARLY MEMBERSHIP</h3>
				<ul>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Unlimited profile folders</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> Share outfit combination to feed</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> 30% off on First Year </li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> 15% off on Following Years</li>
                    <li><ion-icon name="checkmark-circle" id="checkmark"></ion-icon> No Advertisements </li>
    
                </ul>
                <a href="">BECOME A MEMBER 83.99$</a>
		</div>
	</section>

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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


</html>