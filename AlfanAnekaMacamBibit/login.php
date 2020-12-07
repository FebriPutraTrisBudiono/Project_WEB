<!DOCTYPE html>
<html>
<head>
 <title>LOGIN MULTIUSER PHP</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main_style.css">
<!--===============================================================================================-->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<!--------------------------------------------------------------------------------------------------->
</head>
<body>
  <div id="header">
    <a href="index.php"><img src="images/logobaru.png" style="margin: 0px 140px"></a>
  </div>

  <div class="limiter">
    <div class="container-login100" style="background-color: #00FF00">
      <img src="images/logobaru.png" style="width: 20%">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-20 p-b-20">
        <form class="login100-form validate-form" action="cek_login.php" method="POST">
          <span class="login100-form-title p-b-49">
            Login
          </span>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Type your username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>
          
          <div class="text-right p-t-8 p-b-31">
            <a href="#">
              Forgot password?
            </a>
          </div>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="login" value="login">
                Login
              </button>
            </div>
          </div>

          <div class="txt1 text-center p-t-20 p-b-20">
            <span>
              ----------ATAU---------
            </span>
          </div>

          <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
              <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
              <i class="fab fa-google"></i>
            </a>
          </div>

          <div class="flex-col-c p-t-30">
            <span class="txt1 p-b-17">
              Or Sign Up Using
            </span>

            <a href="signup.php" class="txt2">
              Sign Up
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!-- Start Footer  -->
    <footer>
        <div class="footer-main" style="background-color: #fff">
            <div class="container" style="background-color: #fff">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3 style="color: #000000">Business Time</h3>
                            <ul class="list-time">
                                <li style="font-size: 150%; color: #000000">Setiap Hari</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <img src="images/your-logo.png" class="logo" alt="" style="width: 80%">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3 style="color: #000000">Social Media</h3><br>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true" style="color: #000000"></i></a> AlfanAnekaMacamBibit</li><br>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true" style="color: #000000"></i></a> +62 813 3037 5018</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4 style="color: #000000">About Freshshop</h4>
                            <p style="color: #000000">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                            <p style="color: #000000">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>                             
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4 style="color: #000000">Information</h4>
                            <ul>
                                <li><a href="#" style="color: #000000">About Us</a></li>
                                <li><a href="#" style="color: #000000">Customer Service</a></li>
                                <li><a href="#" style="color: #000000">Our Sitemap</a></li>
                                <li><a href="#" style="color: #000000">Terms &amp; Conditions</a></li>
                                <li><a href="#" style="color: #000000">Privacy Policy</a></li>
                                <li><a href="#" style="color: #000000">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4 style="color: #000000">Contact Us</h4>
                            <ul>
                                <li>
                                    <p style="color: #000000"><i class="fas fa-map-marker-alt" style="color: #000000"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p style="color: #000000"><i class="fas fa-phone-square" style="color: #000000"></i>Phone: <a href="tel:+1-888705770" style="color: #000000">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p style="color: #000000"><i class="fas fa-envelope" style="color: #000000"></i>Email: <a href="mailto:contactinfo@gmail.com" style="color: #000000">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>
</html>