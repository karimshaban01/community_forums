<?php
session_start();
  if($_SESSION['email']==''){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/Nembo ya taifa.png" type="image/gif" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/ekko-lightbox.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <title>HOME</title>
</head>
<body>
    <header>
        <h1><img src="image/Nembo ya taifa.png" alt="" width="70" height="70">&nbsp;&nbsp;&nbsp; YOU ARE WELCOME DEAR CITIZEN.</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="chartroom.php">Forums</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
      <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="./image/h2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="./image/h1.jpg" class="" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  
  <!-- end slider section -->

    <div class="about-section" id="about">
        <section class="about_section layout_padding ">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="image/Nembo ya taifa.png" alt="Nembo ya taifa" width="350" height="170">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="heading_container">
                      <h2>
                        About Us
                      </h2>
                    </div>
                    <p class="ez">
                        Welcome to our citizen forum, place where you can send your isses with reference of image or video.
                        this forum will help you out to sot socio-economic problem like Electricity problem, Water problem
                        and many other problems. By using this platform, you are able to communicate with all representatives i.e 
                        District Commisioner, Regional Commisioner, as well as Member of Parliament. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div><br>

    <br>

    <div class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <p class="ez">For inquiries and support, please contact us:</p>
        <p class="ez">Email: haruna_abdulkarim@gmail.com</p>
        <p class="ez">Phone: +255 (0) 785817222</p>
        <p class="ez">Address: 255 Ngara Mtoni, Arusha</p>
    </div><br>
    <footer>
        <p>&copy; 2024 BCS II. All rights reserved.</p>
    </footer>

</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.js"></script>
</html>