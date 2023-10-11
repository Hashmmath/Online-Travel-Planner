<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- swiper css link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/place1.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="/place1.js"></script>
  </head>
  <body>
    <section class="header">
      <a href="home.php" class="logo">Now Or Never</a>

      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">Places</a>
        <a href="package.php">Customer Reviews</a>
        <a href="#footer">Contact Us</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <?php
    require 'image-upload/db_conn.php';
    $id = $_GET['id'];
    $query2 = "Select * from images where id='$id'";
    $query_run1 = mysqli_query($conn, $query2);
    $check_img = mysqli_num_rows($query_run1)>0;

    if($check_img)
    {
      while($row = mysqli_fetch_assoc($query_run1))
      {
      ?>
    <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide slide"
            style="background: url(./image-upload/uploads/<?php echo $row['image_url']; ?>) no-repeat"
          >
            <!-- <div class="content">
              <span>explore, discover, travel</span>
              <h3>travel arround the world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(./images/goa-1.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>discover the new places</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="
              background: url(./images/Fiirst-Timers-Guide-to-Goa.jpg) no-repeat;
            "
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>make your tour worthwhile</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
        </div> -->

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <section class="home-about">
      <div class="image">
        <img src="image-upload/uploads/<?php echo $row['image_url']; ?>" alt="" />
      </div>
      <?php
      }
      }
      ?>
      <?php
    require 'dbconn.php';
    $id = $_GET['id'];
    $query = "Select * from places where id='$id'";
    $query_run = mysqli_query($conn, $query);
    $check_image = mysqli_num_rows($query_run)>0;

    if($check_image)
    {
      while($row = mysqli_fetch_assoc($query_run))
      {
      ?>
      <div class="content">
        <h3>About <?php echo $row['name']?></h3>
        <p>
          <?php echo $row['reviews'];?>
      </br></br>
          <iframe src="<?php echo $row['Google_Map'];?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
        <!-- <a href="about.php" class="btn">read more</a> -->
      </div>
    </section>
    <section class="home-packages">
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="./images/gt-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Tourist Spots</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos,
              sint!
            </p>
            <a href="./tourist.html" class="btn">Explore</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./images/h-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Hotels</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos,
              sint!
            </p>
            <a href="./hotel.html" class="btn">Explore</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./images/gr-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Restaurants</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos,
              sint!
            </p>
            <a href="./restaurant.html" class="btn">Explore</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="./images/gta-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Travel Agency</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos,
              sint!
            </p>
            <a href="./travelagency.html" class="btn">Explore</a>
          </div>
        </div>
      </div>

      <div class="load-more">
        <a href="package.php" class="btn">load more</a>
      </div>
    </section>
    <section class="blogs" id="blogs">
      <h1 class="heading">our daily posts</h1>

      <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="images/img-1.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3><?php echo $row['cust_name']?></h3>
            <p><?php echo $row['cust_reviews']?></p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="swiper-slide slide">
            <img src="images/img-2.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit, deserunt.
            </p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="swiper-slide slide">
            <img src="images/img-3.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit, deserunt.
            </p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="swiper-slide slide">
            <img src="images/img-4.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit, deserunt.
            </p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="swiper-slide slide">
            <img src="images/img-5.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit, deserunt.
            </p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="swiper-slide slide">
            <img src="images/img-6.jpg" alt="" />
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
              <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit, deserunt.
            </p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>
      </div>
    </section>
    <?php
      }
    }
    ?>
    <footer>
      <section id="footer">
        <div class="footer-col">
          <h1>CONTACT US</h1>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </section>

      <div class="copy">
        <p>
          Copyright ©2022 All rights reserved || This Website is designed and
          developed by Hashmmath Shaik
        </p>
      </div>
    </footer>
  </body>
</html>
