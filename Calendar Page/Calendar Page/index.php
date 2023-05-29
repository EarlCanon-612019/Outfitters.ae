
<?php
      // Database connection
      $dbservername = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "outfitters";

      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
      if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
      }

      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Image upload
        $target_dir = "uploads/"; // Directory to store uploaded images
      
        $top_image = uploadImage($_FILES["top_image"], $target_dir);
        $bottom_image = uploadImage($_FILES["bottom_image"], $target_dir);
        $shoes_image = uploadImage($_FILES["shoes_image"], $target_dir);
      
        // Insert uploaded image paths into the database
        $query = "INSERT INTO images (top_image, bottom_image, shoes_image) VALUES ('$top_image', '$bottom_image', '$shoes_image')";
        if (mysqli_query($conn, $query)) {
          
        } else {
          die("Error uploading image: " . mysqli_error($conn));
        }
      }

      // Function to handle image upload
      function uploadImage($file, $target_dir) {
        $target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      
        // Generate a unique filename to avoid overwriting existing images
        $filename = uniqid() . '.' . $imageFileType;
        $target_path = $target_dir . $filename;

        if (move_uploaded_file($file["tmp_name"], $target_path)) {
          return $target_path;
        } else {
          die("Error uploading image.");
        }
      }

      $query = "SELECT * FROM images ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      

      // Close database connection
      mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="calendar, events, reminders, javascript, html, css, open source coding"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    
    <title>Calendar with Events</title>
    
  </head>
  <body>
    <div class="background">
    <!-- NAV BAR -->
    <section class="home">
          <nav>
              <a href="index.html"><img src="images/logo.png"></a>
              <div class="nav-links" id="navLinks">
                  <i class="uil uil-times" onclick="hideMenu()"></i>
                  <ul>
                    <li><a href="..\..\Home Page\home.php">Home</a></li>
                    <li><a href="..\..\Profile Page\index.php">Profile</a></li>
                    <li><a href="..\..\Membership page\Membership page.php">Membership</a></li>
                    <li><a href="index.php"><ion-icon name="star"></ion-icon>Calendar</a></li>
                    <li><a href="..\..\About Page\about page\about.php">About</a></li>
                    <li><a href="..\..\logout.php">Log Out</a></li>
                  </ul>
              </div>
              <i class="uil uil-bars" onclick="showMenu()"></i>
          </nav>
      </section>

      
    <div class="container">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="img_selected">
      <?php if ($row): ?>

        <h3 style="text-align: center;" id="img_desc">Top </h3>
        <img src="<?php echo $row['top_image']; ?>" alt="Top Clothes" width="160">

        <h3 style="text-align: center;" id="img_desc">Bottom </h3>
        <img src="<?php echo $row['bottom_image']; ?>" alt="Bottom Clothes" width="160">

        <h3 style="text-align: center;" id="img_desc">Shoes</h3>
        <img src="<?php echo $row['shoes_image']; ?>" alt="Shoes" width="160">
      <?php endif; ?>
    </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Upload Clothes</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
          <div class="img_upload">
  
      <form method="post" action="index.php" enctype="multipart/form-data">
        <label for="top_image" >Top Clothes</label><br>
        <input type="file" name="top_image" id="top_image" required><br>

        <label for="bottom_image" >Bottom Clothes</label><br>
        <input type="file" name="bottom_image" id="bottom_image" required><br>

        <label for="shoes_image">Shoes</label><br>
        <input type="file" name="shoes_image" id="shoes_image" required><br>

        <input type="submit" value="Upload" id="upload_btn">
      </form><br>
      <?php echo " <div id='img_sccs'>Image uploaded successfully.</div>"; ?>
    </div>

          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
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
  </section>
  </div>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      <script src="script.js"></script>
  </body>

  <style>

  @import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Lilita+One&family=Oleo+Script&family=Roboto+Slab:wght@300&display=swap');

input[type="file"]{
display: none;
}

label{
  height: 40px;
  width: 200px;
  background-color: #e3b37d;
  position: relative;
  padding: 10px;
  border-radius: 5px;
  display: inline-block;
  border: 2px solid black;
  padding-top: 10px;
  padding-bottom: 15px; 
  font-size: 15px;
}

label:hover{
  
  background-color: #4f3211;
  border: 1px solid black;
  transition-timing-function: ease-in;
  color: white;
  font-weight: bold;
}

#upload_btn{

  height: 40px;
  width: 200px;
  background-color: green;
  
}

#upload_btn:hover{

height: 40px;
width: 200px;
background-color: lightgreen;
font-weight: bold;
color: black;
}

.img_upload{
    justify-content: center;
    text-align: center;
    align-items: center;

    padding: 70px;
    color: black;
    padding-bottom: 50px;
    margin-top: -40px;
    padding-top: 20px;
    
}
.img_selected{
  padding-top: 0px;
  margin-top: -100px;
  padding: 70px;
  margin-right: -100px;
  justify-content: center;
  text-align: center;
  align-items: center;
  margin-left: -100px;
  padding-bottom: 20px;
    
  
}

#img_desc{
  justify-content: center;
  text-align: center;
  align-items: center;
  padding: 10px;
  font-family: 'Lilita One';
  font-size: 25px;
  letter-spacing: 3px;
  
}

#img_sccs{
    justify-content: center;
    text-align: center;
    align-items: center;
   
}

  </style>

</html>

