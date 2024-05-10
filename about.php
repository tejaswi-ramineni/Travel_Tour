<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
      <div class="heading" style="background:url(assets/img19.jpeg) no-repeat">
        <h1>About Us</h1>
      </div>
      <section class="about">
        <div class="image">
          <img src="assets/img8.jpeg">
        </div>
        <div class="content">
          <h3>Why Choose Us?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, sequi? Quam repellat distinctio est, laudantium dolore, explicabo modi sed ullam tempore asperiores recusandae. Ipsum optio sapiente similique doloremque! Eos, quis?></p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque totam quis eaque explijdssdnlk</p>
          <div class="icons-container">
            <div class="icons">
              <i class="fas fa-map"></i>
              <span>Top Destination</span>
            </div>
            <div class="icons">
              <i class="fas fa-hand-holding-usd"></i>
              <span>Affordable Price</span>
            </div>
           <div class="icons">
              <i class="fas fa-headset"></i>
              <span>24/7 Service</span>
            </div>
          </div>
        </div>       
      </section>
      <section class="reviews">
        <div class="swiper review-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut et fugiat, repellendus quas veritatis a voluptatum, quod blanditiis 
                impedit nostrum necessitatibus ratione veniam dicta quisquam incidunt ipsam. Nihil, in. Perspiciatis?</p>
                <h3>Kedar</h3>
                <span>Traveller</span>
                <img src="assets/kedar.jpeg">
            </div>
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint praesentium architecto hic ipsa non sapiente, in eveniet nam obcaecati repellendus repellat nemo facere esse laborum eum sit distinctio nihil harum saepe.
                 Inventore beatae quae velit voluptatum, a consequuntur perferendis dolore!</p>
                <h3>Sumair</h3>
                <span>Traveller</span>
                <img src="assets/sumair.jpeg">
            </div>
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint praesentium architecto hic ipsa non sapiente, in eveniet nam obcaecati repellendus repellat nemo facere esse laborum eum sit distinctio nihil harum saepe.
                 Inventore</p>
                <h3>Chandana</h3>
                <span>Traveller</span>
                <img src="assets/chandana.jpeg">
            </div>
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint praesentium architecto hic ipsa non sapiente, in eveniet nam obcaecati repellendus repellat nemo facere esse laborum eum sit distinctio nihil harum saepe.</p>
                <h3>Tejaswi</h3>
                <span>Traveller</span>
                <img src="assets/tejaswi.jpeg">
            </div>
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint praesentium architecto hic ipsa non sapiente, in eveniet nam obcaecati repellendus repellat nemo facere esse laborum eum sit distinctio nihil harum saepe.</p>
                <h3>Asmita</h3>
                <span>Traveller</span>
                <img src="assets/asmita.jpeg">
            </div>
            <div class="swiper-slider slide">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint praesentium architecto hic ipsa non se laborum eum sit distinctio nihil harum saepe.</p>
                <h3>Yasasvi</h3>
                <span>Traveller</span>
                <img src="assets/yasasvi.jpeg">
            </div>
          </div>
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