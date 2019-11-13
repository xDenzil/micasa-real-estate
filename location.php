<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!$_SESSION['active']) {
    header('Location: registration.php');
  }
}

if ((isset($_SESSION['errFlagPage2'])) && ($_SESSION['errFlagPage2']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
  foreach ($_SESSION as $key => $value) { //USE SESSION VARIABLE AS KEY VARIABLE TO ASSIGN VALUES
    $$key = $value;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mi Casa &mdash;</title>
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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom-styles.css">

</head>

<body>

  <div class="site-loader"></div>

  <div class="site-wrap">

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

  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
            <h1 class="mb-2">65 Garden Blvd</h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">$132,250,500</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For Sale</span>
            <h1 class="mb-2">Beverley Hills, JM</h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">$180,000,500</strong></p>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="site-section site-section-sm pb-0">
    <div class="container">
      <div class="row">
        <form class="form-search col-md-12 mb-lg-5" method="POST" action="./validations/locatevalid.php" style="margin-top: -100px;">
          <div class="row  align-items-end">

            <div class="col-md-12">

              <?php if (isset($address1_error)) {
                echo $address1_error;
              } ?>


              <?php if (isset($address2_error)) {
                echo $address2_error;
              } ?>
              <?php if (isset($city_error)) {
                echo $city_error;
              } ?>

              <?php if (isset($parish_error)) {
                echo $parish_error;
              } ?>

            </div>

            <div class="col-md-3">
              <div class="form-group mt-4"><label>Address Line 1</label><input class="form-control <?php if (isset($address1_error)) {
                                                                                                      echo "is-invalid";
                                                                                                    } ?>" type="text" name="address1" value="<?php echo $_SESSION['address1'] ?>"></div>

            </div>
            <div class="col-md-3">
              <div class="form-group"><label>Address Line 2</label>
                <input class="form-control <?php if (isset($address2_error)) {
                                              echo "is-invalid";
                                            } ?>" type="text" name="address2" value="<?php echo $_SESSION['address2'] ?>">
              </div>

            </div>
            <div class="col-md-3">
              <div class="form-group"><label>City</label><input class="form-control <?php if (isset($city_error)) {
                                                                                      echo "is-invalid";
                                                                                    } ?>" type="text" name="city" value="<?php echo $_SESSION['city'] ?>">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group"><label>Parish</label>
                <select class="selectpicker hfix" data-style="btn-light" data-width="100%" name="parish" title="<?php if ($_SESSION['parish'] == null) {
                                                                                                                  echo 'Select Parish';
                                                                                                                } else {
                                                                                                                  echo $_SESSION['parish'];
                                                                                                                } ?>">
                  <option <?php if ($_SESSION['parish'] == 'Kingston & St. Andrew') {
                            echo 'selected="selected"';
                          } ?>>Kingston & St. Andrew</option>
                  <option <?php if ($_SESSION['parish'] == 'Portland') {
                            echo 'selected="selected"';
                          } ?>>Portland</option>
                  <option <?php if ($_SESSION['parish'] == 'St. Thomas') {
                            echo 'selected="selected"';
                          } ?>>St. Thomas</option>
                  <option <?php if ($_SESSION['parish'] == 'St. Catherine') {
                            echo 'selected="selected"';
                          } ?>>St. Catherine</option>
                  <option <?php if ($_SESSION['parish'] == 'St. Mary') {
                            echo 'selected="selected"';
                          } ?>>St. Mary</option>
                  <option <?php if ($_SESSION['parish'] == 'St. Ann') {
                            echo 'selected="selected"';
                          } ?>>St. Ann</option>
                  <option <?php if ($_SESSION['parish'] == 'Manchester') {
                            echo 'selected="selected"';
                          } ?>>Manchester</option>
                  <option <?php if ($_SESSION['parish'] == 'Clarendon') {
                            echo 'selected="selected"';
                          } ?>>Clarendon</option>
                  <option <?php if ($_SESSION['parish'] == 'Hanover') {
                            echo 'selected="selected"';
                          } ?>>Hanover</option>
                  <option <?php if ($_SESSION['parish'] == 'Westmoreland') {
                            echo 'selected="selected"';
                          } ?>>Westmoreland</option>
                  <option <?php if ($_SESSION['parish'] == 'St. James') {
                            echo 'selected="selected"';
                          } ?>>St. James</option>
                  <option <?php if ($_SESSION['parish'] == 'Trelawny') {
                            echo 'selected="selected"';
                          } ?>>Trelawny</option>
                  <option <?php if ($_SESSION['parish'] == 'St. Elizabeth') {
                            echo 'selected="selected"';
                          } ?>>St. Elizabeth</option>
                </select>


              </div>
            </div>
            <div class="col-md-3">
              <br>
              <input class="btn btn-danger text-white btn-block rounded-0" type="button" value="Back" onclick="window.location.href='registration.php'">
            </div>
            <div class="col-md-3">
              <br>
              <input type="submit" class="btn btn-success text-white btn-block rounded-0" role="button" href="./description.php" name="continuelocate" value="Continue">
            </div>


          </div>
        </form>
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


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

</body>

</html>