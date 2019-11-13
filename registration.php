<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (isset($_SESSION['active'])) {
    header('Location: location.php');
  }
}

if ((isset($_SESSION['errFlagPage1'])) && ($_SESSION['errFlagPage1']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
  foreach ($_SESSION as $key => $value) { //USE SESSION VARIABLE AS KEY VARIABLE TO ASSIGN VALUES
    $$key = $value;
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mi Casa &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom-styles.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Mi Casa<span class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="nav-item">
                  <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">All Properties</a>
                </li>
                <input class="btn btn-light rouund" type="button" value="Login" onclick="window.location.href='login.php'">
              </ul>
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="site-blocks-cover inner-page-cover">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2">Registration</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">
          <form action="./validations/regisvalid.php" method="POST" class="p-5">
            <h1>User Information</h1>
            <p class="m-0">Please fill out the following fields.</p>



            <!--- FIRST NAME & LAST NAME SECTION --->

            <?php if (isset($firstname_error)) {
              echo $firstname_error;
            } ?>
            <?php if (isset($lastname_error)) {
              echo $lastname_error;
            } ?>

            <div class="form-row mt-2">
              <div class="form-group col-md-6"><label>First Name</label>
                <input class="form-control <?php if (isset($firstname_error)) {
                                              echo "is-invalid";
                                            } ?>" type="text" name="firstname" value="<?php echo $_SESSION['firstname']; ?>"></div>
              <div class="form-group col-md-6"><label>Last Name</label><input class="form-control <?php if (isset($lastname_error)) {
                                                                                                    echo "is-invalid";
                                                                                                  } ?>" type="text" name="lastname" value="<?php echo $_SESSION['lastname'] ?>"></div>
            </div>


            <!--- USERNAME AND EMAIL SECTION --->

            <?php if (isset($username_error)) {
              echo $username_error;
            } ?>
            <?php if (isset($email_error)) {
              echo $email_error;
            } ?>


            <div class="form-row">
              <div class="form-group col-md-6"><label>Username</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text">@</span>
                  </div><input class="form-control <?php if (isset($username_error)) {
                                                      echo "is-invalid";
                                                    } ?>" type="text" name="username" value="<?php echo $_SESSION['username'] ?>">
                  <div class="input-group-append"></div>
                </div>
              </div>
              <div class="form-group col-md-6"><label>Email Address</label><input class="form-control <?php if (isset($email_error)) {
                                                                                                        echo "is-invalid";
                                                                                                      } ?>" type="text" name="email" value="<?php echo $_SESSION['email'] ?>"></div>
            </div>




            <!--- PHONE NUMBER SECTION --->

            <?php if (isset($areacode_error)) {
              echo $areacode_error;
            } ?>
            <?php if (isset($phonenumber_error)) {
              echo $phonenumber_error;
            } ?>


            <div class="form-group"><label>Phone Number</label>
              <div class="form-row">
                <div class="col col-md-5">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">+1</span></div><input class="form-control <?php if (isset($areacode_error)) {
                                                                                                                                echo "is-invalid";
                                                                                                                              } ?>" type="text" name="areacode" value="<?php echo $_SESSION['areacode'] ?>">
                    <div class="input-group-append"></div>
                  </div>
                </div>
                <div class="col col-md-7"><input class="form-control <?php if (isset($phonenumber_error)) {
                                                                        echo "is-invalid";
                                                                      } ?>" type="text" name="phonenumber" value="<?php echo $_SESSION['phonenumber'] ?>"></div>
              </div>
            </div>



            <!--- PASSWORDS SECTION --->

            <?php if (isset($password_error)) {
              echo $password_error;
            } ?>
            <?php if (isset($passwordconfirm_error)) {
              echo $passwordconfirm_error;
            } ?>
            <?php if (isset($notmatching_error)) {
              echo $notmatching_error;
            } ?>


            <div class="form-group"><label>Password</label><input class="form-control <?php if (isset($password_error)) {
                                                                                        echo "is-invalid";
                                                                                      } ?>" type="password" name="password" value="<?php echo $_SESSION['password'] ?>"></div>
            <div class="form-group"><label>Confirm Password</label><input class="form-control <?php if (isset($passwordconfirm_error)) {
                                                                                                echo "is-invalid";
                                                                                              } ?>" type="password" name="passwordconfirm" value="<?php echo $_SESSION['passwordconfirm'] ?>"></div>


            <!--- CONTINUE BUTTON --->
            <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="continue" value="Continue"></input>
          </form>
        </div>

        <div class="col-lg-4" hidden>
          <div class="p-4 mb-3">
            <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">237 Old Hoope Rd, Kingston 6, JM</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">876-123-1562</a></p>

            <p class="mb-0 font-weight-bold">Email</p>
            <p class="mb-0"><a href="#">Scammadem_dehyaah@gmail.com</a></p>

          </div>

        </div>
      </div>
    </div>
  </div>


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div>
            <h3 class="footer-heading mb-4">About Mi Casa</h3>
            <p>Fast growing Real Estate Company at 237 Old Hope Road, Kingston 6, Jamaica. We offer the best solutions to all your real estate problems! We specialize in locating suitable properties and offering expert advice to our clients.</p>
          </div>



        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-md-12">

            </div>
          </div>


        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Follow Us</h3>

          <div>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>



        </div>

      </div>
      <div class="row mt-5 text-center">
        <div class="col-md-12">
          <p>

            Copyright
            &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
              document.write(new Date().getFullYear());
            </script> Kelleshia Kinlocke & Denzil Williams

          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


</body>

</html>