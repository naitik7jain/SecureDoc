<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SecureDoc</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2 mb-3 mb-lg-0">
                <input type="search" placeholder="Search" />
                <button class="btn my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="signup.php">Sign up</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>01</h5>
                    </div>
                    <h1>
                      SecureDoc<br />
                      <span> Your Perosnal Locker </span>
                    </h1>
                    <p>
                      A security-based documents website offers access to
                      various security-related documents, helping individuals
                      and organizations enhance their security measures and
                      comply with industry standards and regulations.
                    </p>
                    <div class="btn-box">
                      <a href="signup.php" class="btn-1"> Sign Up </a>
                      <a href="login.php" class="btn-2"> Login </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>02</h5>
                    </div>
                    <h1>
                      Safety <br />
                      <span> With New Secruty System </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt
                    </p>
                    <div class="btn-box">
                      <a href="signup.php" class="btn-1"> Sign Up </a>
                      <a href="login.php" class="btn-2"> Login </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-doc-img.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        03
                      </h5>
                    </div>
                    <h1>
                      SecureDoc <br>
                      <span>
                        Pet And Animal
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        04
                      </h5>
                    </div>
                    <h1>
                      SecureDoc <br>
                      <span>
                        Pet And Animal
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/doc-img3.png" alt="" />
          <h2>About Us</h2>
        </div>
        <p>
          It is a long established fact that a reader will be distracted by
          the readable content of a page when looking at its layout. The point
          of using Lorem Ipsum is that it has a more-or-less normal
          distribution of letters,
        </p>
        <div class="btn-box">
          <a href="">
            <span> Read More </span>
            <img src="images/link-arrow.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- start steps section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/step1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>Step-1 Register</h5>
           
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/step2_.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>Step-2 Verify</h5>
          
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="images/step-3.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>Step-3 Upload</h5>
           
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/step-4.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>Step-4 Secure</h5>
           
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end steps section-->

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/doc-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <img src="images/doc-img3.png" alt="" />
              <h2>Protection for Your Document</h2>
            </div>
            <p>
              To protect your documents: encrypt them, control access,
              regularly back up, use firewalls, update software, train
              employees, classify data, monitor access, and securely dispose
              of unnecessary documents.
            </p>
            <div class="btn-box">
              <a href="">
                <span> Read More </span>
                <img src="images/link-arrow.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end pet section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/doc-img3.png" alt="" />
        <h2>What Says Our Customer</h2>
        <p>
          It is a long established fact that a reader will be distracted by
          the
        </p>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h4>Jack Mengo</h4>
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable cIt is a long established fact
                  that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h4>Jack Mengo</h4>
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable cIt is a long established fact
                  that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h4>Jack Mengo</h4>
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable cIt is a long established fact
                  that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/doc-img3.png" alt="" />
              <h2>Request A Call Back</h2>
              <p>
                It is a long established fact that a reader will be distracted
                by the
              </p>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex">
                <button>SEND</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600" height="300" frameborder="0" style="border: 0; width: 100%; height: 100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>CONTACT INFO</h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>+01 1234567890</p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>demo@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>Opening Hours Shop</h5>
            <div>
              <p>Monday to friday</p>
            </div>
            <div>
              <p>07:00 am to 04:00 pm</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>social media</h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>Newsletter</h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">SecureDoc</a>
    </p>
  </section>
  <!-- end  footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>