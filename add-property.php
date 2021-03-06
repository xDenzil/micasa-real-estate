<?php

session_start();

if ($_SESSION['userLevel'] == null) { // If user is a guest, they cannot add a property, so redirect to login page
  header('Location: login.php');
} else if ($_SESSION['userLevel'] == 'user') { // If user is a logged in user, add property to themself
  $addPropertyToUser = $_SESSION['currentUserID'];
} else if ($_SESSION['userLevel'] == 'admin') { // If user is an admin, add property to the user that was selected in admin panel
  $addPropertyToUser = $_GET['userID'];
}

// Checking if there are errors, therefore display error messages
if ((isset($_SESSION['errFlagAddProperty'])) && ($_SESSION['errFlagAddProperty']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
  foreach ($_SESSION as $key => $value) { //USE SESSION VARIABLE AS KEY VARIABLE TO ASSIGN VALUES
    $$key = $value;
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Property - Mi Casa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/css/mediaelementplayer.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="assets/css/fl-bigmug-line.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom-styles.css">
</head>

<body>


  <!-- NAVIGATION -->
  <?php
  switch ($_SESSION['userLevel']) {
    case "user": // logged in user
      require_once('blocks/user-navigation.php');
      break;
    case "admin": // admin user
      require_once('blocks/admin-navigation.php');
      break;
    default: // guest
      require_once('blocks/guest-navigation.php');
      break;
  }
  ?>

    <!-- SECTION HEADER -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(uploads/bg-def2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"">
    <div class=" container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2">Add Property</h1>
        </div>
      </div>
    </div>
    </div>

    <!-- FORM -->
    <div class="site-section site-section-sm pb-0">


      <!-- PROPERTY DETAIlS -->
      <div class="container">
        <div class="row mb-5">
          <form class="form-search col-md-12" method="POST" action="./scripts/validate_property.php" style="margin-top: -100px;">
            <div class="row  align-items-end">

              <div class="col-md-12">
                <h1 class="text-white">Location</h1>
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
                                                                                                      } ?>" type="text" name="address1" value="<?php echo $_SESSION['add-new']['address1'] ?>"></div>

              </div>
              <div class="col-md-3">
                <div class="form-group"><label>Address Line 2</label>
                  <input class="form-control <?php if (isset($address2_error)) {
                                                echo "is-invalid";
                                              } ?>" type="text" name="address2" value="<?php echo $_SESSION['add-new']['address2'] ?>">
                </div>

              </div>
              <div class="col-md-3">
                <div class="form-group"><label>City</label><input class="form-control <?php if (isset($city_error)) {
                                                                                        echo "is-invalid";
                                                                                      } ?>" type="text" name="city" value="<?php echo $_SESSION['add-new']['city'] ?>">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group"><label>Parish</label>
                  <select class="selectpicker hfix" data-style="btn-light" data-width="100%" name="parish" title="<?php if ($_SESSION['add-new']['parish'] == null) {
                                                                                                                    echo 'Select Parish';
                                                                                                                  } else {
                                                                                                                    echo $_SESSION['add-new']['parish'];
                                                                                                                  } ?>">
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Kingston & St. Andrew') {
                              echo 'selected="selected"';
                            } ?>>Kingston & St. Andrew</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Portland') {
                              echo 'selected="selected"';
                            } ?>>Portland</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. Thomas') {
                              echo 'selected="selected"';
                            } ?>>St. Thomas</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. Catherine') {
                              echo 'selected="selected"';
                            } ?>>St. Catherine</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. Mary') {
                              echo 'selected="selected"';
                            } ?>>St. Mary</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. Ann') {
                              echo 'selected="selected"';
                            } ?>>St. Ann</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Manchester') {
                              echo 'selected="selected"';
                            } ?>>Manchester</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Clarendon') {
                              echo 'selected="selected"';
                            } ?>>Clarendon</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Hanover') {
                              echo 'selected="selected"';
                            } ?>>Hanover</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Westmoreland') {
                              echo 'selected="selected"';
                            } ?>>Westmoreland</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. James') {
                              echo 'selected="selected"';
                            } ?>>St. James</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'Trelawny') {
                              echo 'selected="selected"';
                            } ?>>Trelawny</option>
                    <option <?php if ($_SESSION['add-new']['parish'] == 'St. Elizabeth') {
                              echo 'selected="selected"';
                            } ?>>St. Elizabeth</option>
                  </select>


                </div>
              </div>

            </div>
            <div class="row  align-items-end">
              <div class="col-md-12 mb-4 mt-0">
                <h1 class="text-white">Details</h1>

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
                <select class="selectpicker" data-style="btn-light" data-width="100%" name="property_type" title="<?php if ($_SESSION['add-new']['property_type'] == null) {
                                                                                                                    echo 'Select';
                                                                                                                  } else {
                                                                                                                    echo $_SESSION['add-new']['property_type'];
                                                                                                                  } ?>">
                  <option <?php if ($_SESSION['add-new']['property_type'] == 'Vacant Lot') {
                            echo 'selected="selected"';
                          } ?>>Vacant Lot</option>
                  <option <?php if ($_SESSION['add-new']['property_type'] == 'Residential') {
                            echo 'selected="selected"';
                          } ?>>Residential</option>
                  <option <?php if ($_SESSION['add-new']['property_type'] == 'Commercial') {
                            echo 'selected="selected"';
                          } ?>>Commercial</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="building">Building Type</label>
                <select class="selectpicker" data-style="btn-light" data-width="100%" name="building_type" title="<?php if ($_SESSION['add-new']['building_type'] == null) {
                                                                                                                    echo 'Select';
                                                                                                                  } else {
                                                                                                                    echo $_SESSION['add-new']['building_type'];
                                                                                                                  } ?>">
                  <option <?php if ($_SESSION['add-new']['building_type'] == 'Housing') {
                            echo 'selected="selected"';
                          } ?>>Housing</option>
                  <option <?php if ($_SESSION['add-new']['building_type'] == 'Apartment') {
                            echo 'selected="selected"';
                          } ?>>Apartment</option>
                  <option <?php if ($_SESSION['add-new']['building_type'] == 'Town House') {
                            echo 'selected="selected"';
                          } ?>>Town House</option>
                  <option <?php if ($_SESSION['add-new']['building_type'] == 'Office Space') {
                            echo 'selected="selected"';
                          } ?>>Office Space</option>
                  <option <?php if ($_SESSION['add-new']['building_type'] == 'None') {
                            echo 'selected="selected"';
                          } ?>>None</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="listing">Listing Types</label>
                <select class="selectpicker" data-style="btn-light" data-width="100%" name="listing_type" title="<?php if ($_SESSION['add-new']['listing_type'] == null) {
                                                                                                                    echo 'Select';
                                                                                                                  } else {
                                                                                                                    echo $_SESSION['add-new']['listing_type'];
                                                                                                                  } ?>">
                  <option <?php if ($_SESSION['add-new']['listing_type'] == 'Rent') {
                            echo 'selected="selected"';
                          } ?>>Rent</option>
                  <option <?php if ($_SESSION['add-new']['listing_type'] == 'Purchase') {
                            echo 'selected="selected"';
                          } ?>>Purchase</option>
                  <option <?php if ($_SESSION['add-new']['listing_type'] == 'Lease') {
                            echo 'selected="selected"';
                          } ?>>Lease</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="size">Size of Land (acres)</label>
                <div class="input-group">
                  <input type="text" name="landsize" class="form-control <?php if (isset($landsize_error)) {
                                                                            echo "is-invalid";
                                                                          } ?>" type="text" value="<?php echo $_SESSION['add-new']['landsize'] ?>">
                  <div class="input-group-append"><span class="input-group-text">acres</span></div>
                </div>
              </div>
              <div class="col-md-3">
                <label for="bedrooms"># of Bedrooms</label>
                <input type="number" name="bedrooms" min="0" class="form-control <?php if (isset($bedrooms_error)) {
                                                                                    echo "is-invalid";
                                                                                  } ?>" type="text" value="<?php if (!isset($_SESSION['add-new']['bedrooms'])) {
                                                                                                              echo '0';
                                                                                                            } else {
                                                                                                              echo $_SESSION['add-new']['bedrooms'];
                                                                                                            } ?>">
              </div>
              <div class="col-md-3">
                <label for="bathrooms"> # of Bathrooms</label>
                <input type="number" name="bathrooms" min="0" class="form-control <?php if (isset($bathrooms_error)) {
                                                                                    echo "is-invalid";
                                                                                  } ?>" type="text" value="<?php if (!isset($_SESSION['add-new']['bathrooms'])) {
                                                                                                              echo '0';
                                                                                                            } else {
                                                                                                              echo $_SESSION['add-new']['bathrooms'];
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
                                                                      } ?>" type="text" value="<?php echo $_SESSION['add-new']['price'] ?>">
                </div>

              </div>
              <div class="col-md-3">
                <input class="btn btn-success text-white btn-block rounded-2" role="submit" name="add-property" type="submit" value="Continue">
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'blocks/footer.php'; ?>

</body>

</html>