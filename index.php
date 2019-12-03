<?php

session_start();
include './database/db_connection.php'; // CONNECT TO DATABASE
include './scripts/variables.php'; // THIS FILE DECLARES VARIABLES
$query = "SELECT * FROM property ORDER BY PropertyID DESC LIMIT 10;"; // 10 MOST RECENT PROPERTIES QUERY
$result = mysqli_query($conn, $query) or die("Failed to get data.");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mi Casa</title>
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

  <div class="site-loader"></div>

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

    <!-- IMAGE SLIDER -->
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(uploads/bg-def2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Buyers</span>
              <h1 class="mb-2">Find The Perfect Spot</h1>
              <p class="mb-5"><strong class="h2 text-white font-weight-bold">Right here.</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-blocks-cover overlay" style="background-image: url(uploads/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Sellers</span>
              <h1 class="mb-2">Got Property? Get Listed.</h1>
              <p class="mb-5"><strong class="h2 text-white font-weight-bold">It's free.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- VIEW ALL BUTTON -->
    <div class="site-section p-2 bg-white">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-8 text-center">
            <div class="site-section-title">
              <br>
              <h5>Most Recent Listings</h5>
              <input class="btn btn-primary rouund" type="button" value="View All" onclick="window.location.href='property-search.php'">
            </div>
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- LISTINGS SECTION -->
    <div class="site-section site-section-sm p-1 pt-5" style="background-color:#F0E7D8;">
      <div class="container">
        <div class="row mb-5">
          <?php

          if (mysqli_num_rows($result) != 0) { //use h-100 for fixed height
            //header('Location: ../property_search.php');
            while ($row = mysqli_fetch_assoc($result)) {
              echo ' <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
                <a href="property-details.php?propID=' . $row['PropertyID'] . '&UserID=' . $row['UserID'] . '" class="property-thumbnail">
                    <div class="offer-type-wrap">
                        <span class="offer-type bg-primary px-3 p-2">' . $row['ListingType'] . '</span>
                    </div>
                    <img src="uploads/' . $row['PreviewImageURL'] . '"  alt="Image" class="img-fluid">
                </a>
                <div class="p-4 property-body">
                    <h2 class="property-title">' . $row['Address1'] . '</h2>
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>' . $row['City'] . ", " . $row['Parish'] . '</span>
                    <strong class="property-price text-primary mb-3 d-block text-dark"> $' . number_format($row['Price'], 2) . '</strong>
                </div>
            </div>
        </div>';
            }
            //$_SESSION['search_results'] = $row;
          } else {
            echo '<a class="mx-auto">No properties to show.</a>';
          } ?>

        </div>

      </div>
    </div>

    <!-- WHY WE ARE THE BEST -->
    <div class="site-section p-5 bg-light">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-8 text-center">
            <div class="site-section-title">
              <br>
              <h2>Why We Are The Best?</h2>
            </div>
            <p>We offer the best solution to your real estate problems. We offer 100% Buy-Back guaranteed Services with enhanced inspections and private showings. Our Dedicated Full Service offer assistance in making offers when chosing the property that best suits you needs. </p>
          </div>
        </div>
      </div>
    </div>

    <!-- MORE TEXT CONTENT -->
    <div class="site-section p-5 blu text-white">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service text-center">
            <span class="icon flaticon-house text-white"></span>
            <h2 class="service-heading text-white">Guaranteed Research </h2>
            <p class="text-white">Our experts find the best properties in Jamaica by conducting research on each location.</p>

          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service text-center">
            <span class="icon flaticon-sold text-white"></span>
            <h2 class="service-heading text-white">Sold Houses</h2>
            <p class="text-white">We have sold more houses, lots and office/business space than you can count.</p>

          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service text-center">
            <span class="icon flaticon-camera text-white"></span>
            <h2 class="service-heading text-white">Secure Transactions</h2>
            <p class="text-white">We are the bridge between you owning that lot, that new house on the block or that new office space</p>
          </a>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'blocks/footer.php'; ?>

</body>

</html>