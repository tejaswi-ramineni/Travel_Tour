<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!--- swiper css link --->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <!--- custom css link --->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- header section --->
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
          <a href="home.php">home</a>
          <a href="about.php">about</a>
          <a href="package.php">package</a>
          <a href="book.php">book</a>
        </nav>
          <!--- The "fas fa-bars" class is commonly used with Font Awesome icons. It represents the bars icon, typically used for menu buttons or navigation toggles.-->
          <div id="menu-btn" class="fas fa-bars"></div>
      </section>
      <div class="heading" style="background:url(assets/img20.jpg) no-repeat">
        <h1>Packages</h1>
      </div>

      <section class="packages">
        <h1 class="heading-title">Top Destinations</h1>
        <div class="box-container">
          <div class="box">
            <div class="image">
              <img src="assets/img25.jpg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img10.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img3.avif">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img18.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img6.avif">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img4.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img23.jpg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img17.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img21.jpg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img22.jpg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img3.avif">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img2.avif">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, asperiores!</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
        </div>
        <div class="load-more"><span class="btn">Load More</span></div>
      </section>


      <section class="footer">
        <div class="box-container">
          <div class="box">
            <h3> Quick Links </h3>
            <!-- <i> tags with classes like fas fa-angle-right to indicate navigation arrows. -->
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> book</a>
          </div>
          <div class="box">
            <h3> Extra Links </h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
          </div>
          <div class="box">
            <h3> Contact Info </h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-789</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
            <a href="#"><i class="fas fa-envelope"></i> world.wanderers@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> hyderabad , india - 234556</a>
          </div>
          <div class="box">
            <h3> Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
          </div>
        </div>
           <div class="credit"> Created by <span>ACT</span> | All rights reserved! </div>
    </section>





<!-- swiper js link --->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js link --->
<script src="script.js?v=<?php echo time(); ?>"></script>
</body>
</html>