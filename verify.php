<?php
require('db.php');
if (isset($_POST['email'])) {
    
    $fname = $_POST['fname'];
    $_SESSION['fname'] = $fname;

    $lname = $_POST['lname'];
    $_SESSION['lname'] = $lname;

    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    
    $phone = $_POST['phone'];
    $_SESSION['phone'] = $phone;

    $pass = $_POST['pass'];
    $_SESSION['pass'] = $pass;

        
    $otp_mobile = rand(1000,9999);
    $_SESSION['otp_mobile'] = $otp_mobile;



    $otp_mail = rand(1000,9999);
    $_SESSION['otp_mail'] = $otp_mail;
    


    $query    = "INSERT INTO users (fname, lname,phone, email,pass,otp_mobile,otp_mail) VALUES ('$fname', '$lname','$phone','$email','$pass','$otp_mobile','$otp_mail')";
    $result   = mysqli_query($conn, $query);
    $to_email = $_SESSION['email'];
    $subject = "Simple Email Test via PHP";
    $body = $body =    '<p>For verify your email address, enter this verification code when prompted: <b>'.$_SESSION['otp_mail'].'</b>.</p>
    <p>Sincerely,</p>
    <p>Webslesson.info</p>
    ';;
    $headers = "From: njnimitnaitikm@gmail.com";


if (mail($to_email, $subject, $body, $headers)) {
  echo "";
}

$api_key = 'b8cc4f50-f7a2-11ed-addf-0200cd936042'; // API Key
	$req = "https://2factor.in/API/V1/".$api_key."/SMS/".$_SESSION['phone']."/".$_SESSION['otp_mobile'];

	$sms = file_get_contents($req);
	$sms_status = json_decode($sms, true);
	if($sms_status['Status'] !== 'Success') {
		$err['error'] = 'Error Retry!!! ';
	}
} 
    ?>
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
    <h2>User Verification</h2>
    <form action="check.php" autocomplete="off" method = "post">
      <div class="error-text">Error</div>
    <div class="input">
      <label>Verify Email</label>
      <input type="text" name="mail_otp" placeholder="Verify Email(Enter OTP)" required>
  </div>
      <div class="input">
          <label>Verify Phone</label>
          <input type="text" name="mobile_otp" placeholder="Verify Phone(Enter OTP)" required>
      </div>
      <div class="submit">
    <input type="submit" name = "button" value="Verify now" class="button">
  </div>
  </form>
  <div class="link">Not signed up? <a href="signup.php">Signup now</a></div>
  </div>

<!-- form end -->


<scrip src="js/login.js"></scrip>

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

</body>

</html>