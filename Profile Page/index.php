
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>


  <body>

    <div class="header__wrapper">
      <header>
        <section class="home">
          <nav>
              <a href="index.html"><img src="img/logo.png"></a>
              <div class="nav-links" id="navLinks">
                  <i class="uil uil-times" onclick="hideMenu()"></i>
                  <ul>
                    <li><a href="..\Home Page\home.php">Home</a></li>
                    <li><a href="index.php">Profile</a></li>
                    <li><a href="..\Membership page\Membership page.php">Membership</a></li>
                    <li><a href="..\Calendar Page\Calendar Page\index.php"><ion-icon name="star"></ion-icon>Calendar</a></li>
                    <li><a href="..\About Page\about page\about.php">About</a></li>
                    <li><a href="..\logout.php" style="color: black;">Log Out</a></li>
                  </ul>
              </div>
              <i class="uil uil-bars" onclick="showMenu()"></i>
          </nav>
      </section>
      </header>
      
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="img/User1.jpg" alt="Hye-Jin Shin" />
            <span></span>
          </div>

          <h2>Hye-Jin Shin</h2>

          <div class="numbers">
          <ul class="about">
            <li><span>4,073</span>Followers</li>
            <li><span>322</span>Following</li>
            <li><span>200,543</span>Attraction</li>
          </ul>
        </div>

          <div class="content">
            <p>
              Passionate, driven and always had a love for fashion and organization.
            </p>
            <i class="fas fa-map-marker-alt"><p>Malibu, California</p></i>

          </div>
        </div>
        <div class="right__col">
          <nav>
            <ul>
              <li><a href="">photos</a></li>
            </ul>
          
          </nav>

          <div class="photos">
            <img src="img/photo1.jpg" alt="Photo" />
            <img src="img/photo2.jpg" alt="Photo" />
            <img src="img/photo3.jpg" alt="Photo" />
            <img src="img/photo4.jpg" alt="Photo" />
            <img src="img/photo5.jpg" alt="Photo" />
            <img src="img/photo6.jpg" alt="Photo" />
          </div>
        </div>
      </div>
    </div>

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
