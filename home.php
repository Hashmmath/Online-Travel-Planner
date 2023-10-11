<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <style>
      .search {
        float: right;
        color: white;
        padding: 12px 120px;
        margin-right: 35px;
        border-radius: 15px;
      }
      .topnav .login-container {
        float: right;
      }
      .topnav .login-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 3px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .login-container button:hover {
        background: #ccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .login-container {
          float: none;
        }
      }

      .topnav .reg-container {
        float: right;
      }
      .topnav .reg-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 70px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .reg-container button:hover {
        background: #cccccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .reg-container {
          float: none;
        }
      }
      .logo {
        padding: 3px 2px;
        margin-top: 0px;
        margin-right: 600px;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
        height: 2cm;
        float: none;
        width: 3cm;
        color: #ccc;
      }
    </style>
  </head>
  <body>
    <div class="logo">
      <p>Now or Never Logo</p>
    </div>
    <!-- Navigation -->
    <nav class="w3-bar w3-black">
      <a href="./home.php" class="w3-button w3-bar-item">Home</a>
      <!-- <a href="./places.html" class="w3-button w3-bar-item">Places</a> -->
      <a href="#course" class="w3-button w3-bar-item">Places</a>
      <!-- <a href="./addvideo.php" class="w3-button w3-bar-item">Teach or Create</a> -->
      <a href="#review" class="w3-button w3-bar-item">Customer Reviews</a>
      <a href="#footer" class="w3-button w3-bar-item">Contact Us</a>
      <a href="./image-upload/up.php" class="w3-button w3-bar-item">Upload Place</a>
      <div class="search">
        <input
          type="text"
          name="search"
          id="search"
          placeholder="Search this website"
        />
      </div>
    </nav>
    <div class="topnav">
      <div class="login-container">
        <form action="./login.html">
          <button type="submit">Login</button>
        </form>
      </div>
      <div class="reg-container">
        <form action="./registration.php">
          <button type="submit">SignUp</button>
        </form>
      </div>
    </div>
    <section id="home">
      <h1>Welcome to Now or Never!!</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, veniam
        rem libero quas ut reprehenderit facere voluptates? Ut cum numquam,
        molestiae alias possimus officiis soluta, impedit doloribus illo,
        recusandae minus.
      </p>
      <div class="btn">
        <a class="black" href="#">Explore Places</a>
      </div>
    </section>

    <!-- <section id="feat">
      <h1>Amazing Features</h1>
      <p>
        Everything has its own sets of advantanges unless you first step on it
      </p>
      <br />
      <div class="edu-feat">
        <div class="edu-box">
          <i class="fab fa-user-graduate"></i>
          <h3>Graduation Benefits</h3>
          <p>
            Graduating from these courses is almost equal to your college level
            graduation
          </p>
        </div>
        <div class="edu-box">
          <i class="fas fa-calendar-clock"></i>
          <h3>Self Paced</h3>
          <p>
            You can access our resources or the course resources for which you
            have applied for at anytime and with your own comfort.
          </p>
        </div>
        <div class="edu-box">
          <i class="fas fa-notebook"></i>
          <h3>Resources</h3>
          <p>
            Once you get registered for any course you can access the Course
            material, Pdf, and many more transcripts which are related to the
            course.
          </p>
        </div>
      </div>
    </section> -->

    <section id="course">
      <h1>Places We Discovered</h1>
      <?php
      require 'image-upload/db_conn.php';
      $query = "Select * from images";
      $query_run = mysqli_query($conn, $query);
      $check_image = mysqli_num_rows($query_run)>0;

      if($check_image)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <div class="Course-box">
          <div class="Courses">
            <div class = "col-4">
            <a href="./place1.php ?id=<?php echo $row['id']; ?>"
              ><img src="image-upload/uploads/<?php echo $row['image_url']; ?>" width = "255px" height = "200px" alt=""
            /></a>
            <div class="details">
              <span>Updated 09/06/22</span>
              <h6><?php echo $row['place_name']; ?></h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(239)</span>
              </div>
        </div>
            </div>
            <!-- <div class="cost">$49.99</div> -->
          </div>
          <?php
        }
      }
      else
      {
        echo "No Place Found";
      }
      ?>
      <!-- <div class="Course-box">
        <div class="Courses">
          <a href="./place1.html"
            ><img src="./images/Chennai-1.jpg" alt=""
          /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>Chennai</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div>
          <div class="cost">$49.99</div>
        </div> -->

        <!-- <div class="Courses">
          <a href="./place1.html"><img src="./images/goa.jpg" alt="" /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>GOA</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div>
          <div class="cost">$49.99</div>
        </div> -->

        <!-- <div class="Courses">
          <a href="./place1.html"><img src="./images/JAIPUR.jpg" alt="" /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>Jaipur</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div>
          <div class="cost">$49.99</div>
        </div> -->

        <!-- <div class="Courses">
          <a href="./place1.html"
            ><img
              src="./images/1551428022_alleppeyPlaces_feature.png.jpg"
              alt=""
          /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>Kerala</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div>
          <div class="cost">$49.99</div>
        </div> -->

        <!-- <div class="Courses">
          <a href="./place1.html"
            ><img src="./images/637317253323603095LxJnHt.png" alt=""
          /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>Ooty</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div>
          <div class="cost">$49.99</div>
        </div> -->

        <!-- <div class="Courses">
          <a href="./place1.html"><img src="./images/Ravangla.jpg" alt="" /></a>
          <div class="details">
            <span>Updated 09/06/22</span>
            <h6>Ravangla</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(239)</span>
            </div>
          </div> -->
          <!-- <div class="cost">$49.99</div> -->
        </div>
      </div>
      <!-- <div class="btn">
        <a id="green" class="green" href="addvideo.php">Add Course</a>
        </div>
</div> -->
    </section>

    <section id="review">
      <div class="wrapper">
        <h1>Customer Reviews</h1>
        <div class="our_team">
          <div class="team_member">
            <div class="member_img">
              <img src="./images/member_1.png" alt="our_team" />
              <div class="social_media">
                <div class="facebook item">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="twitter item"><i class="fab fa-twitter"></i></div>
                <div class="instagram item">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
            <h3>John Wright</h3>
            <span>Web Developer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
              doloribus fuga illum recusandae, saepe voluptates qui. Omnis optio
              tenetur libero dolore voluptatum, dolorem asperiores ad, amet
              cupiditate quas, nihil temporibus?
            </p>
          </div>
          <div class="team_member">
            <div class="member_img">
              <img src="./images/member_2.png" alt="our_team" />
              <div class="social_media">
                <div class="facebook item">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="twitter item"><i class="fab fa-twitter"></i></div>
                <div class="instagram item">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
            <h3>barbara mori</h3>
            <span>Data Analyst</span>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Consectetur, fugiat velit? Magni illum dolores molestiae eaque
              blanditiis voluptates quia pariatur qui harum accusamus,
              consectetur cum facere quasi fugit eius dolore.
            </p>
          </div>
          <div class="team_member">
            <div class="member_img">
              <img src="./images/member_3.png" alt="our_team" />
              <div class="social_media">
                <div class="facebook item">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="twitter item"><i class="fab fa-twitter"></i></div>
                <div class="instagram item">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
            <h3>harry dickens</h3>
            <span>Software Engineer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quod
              excepturi molestias debitis perspiciatis, inventore nulla atque,
              beatae nostrum quibusdam a eum voluptatibus odio? Fugiat saepe
              recusandae similique vero optio!
            </p>
          </div>
          <div class="team_member">
            <div class="member_img">
              <img src="./images/member_4.png" alt="our_team" />
              <div class="social_media">
                <div class="facebook item">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="twitter item"><i class="fab fa-twitter"></i></div>
                <div class="instagram item">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
            <h3>sammy louise</h3>
            <span>Graphic Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto
              doloremque placeat soluta voluptatibus tempora at numquam ullam,
              officiis esse dolore ipsum repellat beatae, vero necessitatibus,
              consequuntur explicabo id? Ipsam, adipisci?
            </p>
          </div>
        </div>
      </div>
    </section>

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
