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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style>

</style>

<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <div class="form">
    <h2>Signup Form</h2>
    <p>It's free and always will be.</p>
    <form action="verify.php" method ="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="error-text">Error</div>
    <div class="grid-details">
      <div class="input">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*" >
      </div>
      <div class="input">
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
      </div>
    </div>
    <div class="input">
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter Your Email" required>
  </div>
    <div class="input">
      <label>Phone</label>
      <input type="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')"oninput="this.setCustomValidity('')">
  </div>
  <div class="grid-details">
      <div class="input">
          <label>Password</label>
          <input type="password" name="pass" id ="password" placeholder="Password" required>
      </div>
      <div class="input">
          <label>Confirm Password</label>
          <input type="password" name="cpass" id="confirm_password" placeholder="Confirm Password" required>
      </div>
    </div>
    <div class="profile-img">
      <div class="file-upload">
          <input name="image" id="image-preview" type="file" class="file-input"  oninvalid="this.setCustomValidity('Select an Profile Image')"oninput="this.setCustomValidity('')"/>
          <i class="fas fa-user-edit"></i>
      </div>
      </div>
      <div class="submit">
    <input type="submit" value="Signup Now" class="button">
  </div>
  </form>
  <div class="link">Already signed up? <a href="login.php">Login now</a></div>
  </div>

<!-- form end -->


  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Opening Hours Shop
            </h5>
            <div>
              <p>
                Monday to friday
              </p>
            </div>
            <div>
              <p>
                07:00 am to 04:00 pm
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
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
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
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
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

  

<script>
  $(document).ready(function() {
  //Preloader
  preloaderFadeOutTime = 1200;
  function hidePreloader() {
  var preloader = $('#loader');
  preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  });
  </script>

<script src="js/register.js"></script>
<script>$(document).ready(function(){

var $randomnbr = $('.nbr');
var $timer= 10;
var $it;
var $data = 0;
var index;
var change;
var letters = ["c", "o", "d", "e", "p", "e", "n", ".", "i", "o"];

$randomnbr.each(function(){
    
  change = Math.round(Math.random()*100);
  $(this).attr('data-change', change);
  
});

function random(){
  return Math.round(Math.random()*9);
};

function select(){
  return Math.round(Math.random()*$randomnbr.length+1);
};

function value(){
  $('.nbr:nth-child('+select()+')').html(''+random()+'');
  $('.nbr:nth-child('+select()+')').attr('data-number', $data);
  $data++;
  
  $randomnbr.each(function(){
      if(parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))){
        index = $('.ltr').index(this);
        $(this).html(letters[index]);
        $(this).removeClass('nbr');
      }
  });
  
};

$it = setInterval(value, $timer);
  
});</script>
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;</script>
</body>

</html>