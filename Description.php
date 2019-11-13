<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!$_SESSION['active']) {
    header('Location: registration.php');
  }
}

if ((isset($_SESSION['errFlagPage3'])) && ($_SESSION['errFlagPage3']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom-styles.css">
</head>

<body>
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
              <li><a href="logout.php">Logout</a></li>
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
        <form class="form-search col-md-12" method="POST" action="./validations/propertvalid.php" style="margin-top: -100px;">
          <div class="row  align-items-end">
            <div class="col-md-12 mb-4 mt-0">
              <?php if (isset($property_type_error)) {
                echo $property_type_error;
              } ?>
              <?php if (isset($building_type_error)) {
                echo $building_type_error;
              } ?>
              <?php if (isset($listing_type_error)) {
                echo $listing_type_error;
              } ?>
              <?php if (isset($landsize_error)) {
                echo $landsize_error;
              } ?>
              <?php if (isset($bedrooms_error)) {
                echo $bedrooms_error;
              } ?>
              <?php if (isset($bathrooms_error)) {
                echo $bathrooms_error;
              } ?>
              <?php if (isset($price_error)) {
                echo $price_error;
              } ?>
            </div>
            <div class="col-md-3">
              <label for="properties">Types of Property</label>
              <select class="selectpicker" data-style="btn-light" data-width="100%" name="property_type" title="<?php if ($_SESSION['property_type'] == null) {
                                                                                                                  echo 'Select';
                                                                                                                } else {
                                                                                                                  echo $_SESSION['property_type'];
                                                                                                                } ?>">
                <option <?php if ($_SESSION['property_type'] == 'Vacant Lot') {
                          echo 'selected="selected"';
                        } ?>>Vacant Lot</option>
                <option <?php if ($_SESSION['property_type'] == 'Residential') {
                          echo 'selected="selected"';
                        } ?>>Residential</option>
                <option <?php if ($_SESSION['property_type'] == 'Commercial') {
                          echo 'selected="selected"';
                        } ?>>Commercial</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="building">Building Type</label>
              <select class="selectpicker" data-style="btn-light" data-width="100%" name="building_type" title="<?php if ($_SESSION['building_type'] == null) {
                                                                                                                  echo 'Select';
                                                                                                                } else {
                                                                                                                  echo $_SESSION['building_type'];
                                                                                                                } ?>">
                <option <?php if ($_SESSION['building_type'] == 'Housing') {
                          echo 'selected="selected"';
                        } ?>>Housing</option>
                <option <?php if ($_SESSION['building_type'] == 'Apartment') {
                          echo 'selected="selected"';
                        } ?>>Apartment</option>
                <option <?php if ($_SESSION['building_type'] == 'Town House') {
                          echo 'selected="selected"';
                        } ?>>Town House</option>
                <option <?php if ($_SESSION['building_type'] == 'Office Space') {
                          echo 'selected="selected"';
                        } ?>>Office Space</option>
                <option <?php if ($_SESSION['building_type'] == 'None') {
                          echo 'selected="selected"';
                        } ?>>None</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="listing">Listing Types</label>
              <select class="selectpicker" data-style="btn-light" data-width="100%" name="listing_type" title="<?php if ($_SESSION['listing_type'] == null) {
                                                                                                                  echo 'Select';
                                                                                                                } else {
                                                                                                                  echo $_SESSION['listing_type'];
                                                                                                                } ?>">
                <option <?php if ($_SESSION['listing_type'] == 'Rent') {
                          echo 'selected="selected"';
                        } ?>>Rent</option>
                <option <?php if ($_SESSION['listing_type'] == 'Purchase') {
                          echo 'selected="selected"';
                        } ?>>Purchase</option>
                <option <?php if ($_SESSION['listing_type'] == 'Lease') {
                          echo 'selected="selected"';
                        } ?>>Lease</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="size">Size of Land (acres)</label>
              <div class="input-group">
                <input type="text" name="landsize" class="form-control <?php if (isset($landsize_error)) {
                                                                          echo "is-invalid";
                                                                        } ?>" type="text" value="<?php echo $_SESSION['landsize'] ?>">
                <div class="input-group-append"><span class="input-group-text">acres</span></div>
              </div>
            </div>
            <div class="col-md-3">
              <label for="bedrooms"># of Bedrooms</label>
              <input type="number" name="bedrooms" min="0" class="form-control <?php if (isset($bedrooms_error)) {
                                                                                  echo "is-invalid";
                                                                                } ?>" type="text" value="<?php if (!isset($_SESSION['bedrooms'])) {
                                                                                                            echo '0';
                                                                                                          } else {
                                                                                                            echo $_SESSION['bedrooms'];
                                                                                                          } ?>">
            </div>
            <div class="col-md-3">
              <label for="bathrooms"> # of Bathrooms</label>
              <input type="number" name="bathrooms" min="0" class="form-control <?php if (isset($bathrooms_error)) {
                                                                                  echo "is-invalid";
                                                                                } ?>" type="text" value="<?php if (!isset($_SESSION['bathrooms'])) {
                                                                                                            echo '0';
                                                                                                          } else {
                                                                                                            echo $_SESSION['bathrooms'];
                                                                                                          } ?>">
            </div>
            <div class="col-md-3">
              <label for="price">Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="text" name="price" class="form-control <?php if (isset($price_error)) {
                                                                      echo "is-invalid";
                                                                    } ?>" type="text" value="<?php echo $_SESSION['price'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <input class="btn btn-success text-white btn-block rounded-2" role="button" href="./registerproperty.php" name="finish" type="submit" value="Finish">
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-md-12">
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