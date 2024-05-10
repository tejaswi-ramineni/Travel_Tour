<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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
      <div class="heading" style="background:url(assets/img26.jpg) no-repeat">
        <h1>Book Now</h1>
      </div>
      <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
          <div class="flex">
            <div class="inputBox">
              <span>Name:</span>
              <input type="text" placeholder="Enter your Name" name="name">
            </div>
            <div class="inputBox">
              <span>Email:</span>
              <input type="email" placeholder="Enter your Email" name="email">
            </div>
            <div class="inputBox">
              <span>Phone:</span>
              <input type="number" placeholder="Enter your Number" name="phone">
            </div>
            <div class="inputBox">
              <span>Address:</span>
              <input type="text" placeholder="Enter your Address" name="address">
            </div>
            <div class="inputBox">
              <span>Where To:</span>
              <input type="text" placeholder="Place you want to visit" name="location">
            </div>
            <div class="inputBox">
              <span>How many:</span>
              <input type="number" placeholder="Number of guests?" name="guests">
            </div>
            <div class="inputBox">
              <span>Arrivals:</span>
              <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
              <span>Leaving:</span>
              <input type="date" name="leaving">
            </div>
          </div>
          <input type="submit" value="submit" class="btn" name="send">
        </form>
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