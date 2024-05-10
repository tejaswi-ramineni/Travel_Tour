<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
     <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide" style="background: url(assets/img7.jpeg) no-repeat">
            <div class="content">
              <span>Explore, Discover, Travel</span>
              <h3>Travel Around the World</h3>
              <a href="package.php" class="btn"> Discover More</a>
            </div>
          </div>
          <div class="swiper-slide slide" style="background: url(assets/img5.avif) no-repeat">
            <div class="content">
              <span>Explore, Discover, Travel</span>
              <h3>Discover new places</h3>
              <a href="package.php" class="btn"> Discover More</a>
            </div>
          </div>
          <div class="swiper-slide slide" style="background: url(assets/img16.jpeg) no-repeat">
            <div class="content">
              <span>Explore, Discover, Travel</span>
              <h3>Make your trip worthwhile</h3>
              <a href="package.php" class="btn"> Discover More</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

     </section> 

      <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="assets/icon1.png">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="assets/icon2.png">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="assets/icon3.png">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="assets/icon4.png">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="assets/icon5.png">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="assets/icon6.png">
                <h3>Camping</h3>
            </div>
        </div>
      </section>
      <section class="home-about">
        <div class="image">
          <img src="assets/img9.jpeg">
        </div>
        <div class="content">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repellat eligendi eaque ad quae quibusdam, repellendus expedita sed quis facilis adipisci doloremque iusto quam culpa corporis quas vero et sapiente?</p>
          <a href="about.php" class="btn">Read More</a>
        </div>
      </section>

      <section class="home-packages">
        <h1 class="heading-title"> Our Packages</h1>
        <div class="box-container">
          <div class="box">
            <div class="image">
              <img src="assets/img19.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi vero fugit, exercitatio.</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img13.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi vero fu.</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="assets/img8.jpeg">
            </div>
            <div class="content">
              <h3>Adventure and Tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi vero fugit, e.</p>
              <a href="book.php" class="btn">Book Now</a>
            </div>
          </div>

        </div>
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
      </section>

      <section class="home-offer">
        <div class="content">
          <h3>Upto 50% OFF</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatibus perspiciatis velit sunt iure. Iste voluptates perspiciatis assumenda pa.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
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