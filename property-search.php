<?php
session_start();


if (isset($_GET['property_search'])) {

    // SEARCH FUNCTION 
    /*
    This search function works by storing the values from the GET into variables,
    then checking if those variables are empty. A variable is created that will
    store piece of the SQL string, if the GET was empty, it will append LIKE'%' to 
    the SQL String, which will basically show all DB results, otherwise, it will
    append AND $search='value' to the sql string, which will show results for the
    filters the user selected. It's complicated and took me a long time to figure
    out, not really good at explaining it.. -Denzil

    */

    $listing_type_search = $_GET['listing_type'];
    $parish_search = $_GET['parish'];
    $property_type_search = $_GET['property_type'];
    $min_price_search = $_GET['min_price'];
    $max_price_search = $_GET['max_price'];

    empty($parish_search) ? $parish_sql = "AND Parish LIKE '%'" : $parish_sql = "AND Parish = '$parish_search'";
    empty($listing_type_search) ? $listing_sql = "AND ListingType LIKE '%'" : $listing_sql = "AND ListingType = '$listing_type_search'";
    empty($property_type_search) ? $property_type_sql = "AND PropertyType LIKE '%'" : $property_type_sql = "AND PropertyType = '$property_type_search'";
    empty($min_price_search) ? $min_price_search = 0 : $min_price_search = $min_price_search;
    empty($max_price_search) ? $max_price_search = 0 : $max_price_search = $max_price_search;

    if ($min_price_search == 0 & $max_price_search == 0) {
        $price_sql = '';
    } else if ($max_price_search == 0) {
        $price_sql = "AND Price >= $min_price_search";
    } else if ($min_price_search == 0) {
        $price_sql = "AND Price <= $max_price_search";
    } else {
        $price_sql = "AND Price >= $min_price_search AND Price <= $max_price_search";
    }


    include './database/db_connection.php'; // Connect to Database
    $query = "SELECT * FROM property WHERE PropertyID IS NOT NULL $parish_sql $listing_sql $property_type_sql $price_sql;";
    $result = mysqli_query($conn, $query) or die("Failed to get data.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash;</title>
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

    <!-- NAVIGATION SECTION -->
    <?php
    switch ($_SESSION['userLevel']) {
        case "user": //Not logged in
            require_once('blocks/user-navigation.php');
            break;
        case "admin": //regular user
            require_once('blocks/admin-navigation.php');
            break;
        default: //admin nav
            require_once('blocks/guest-navigation.php');
            break;
            //etc and default nav below
    }
    ?>

        <!-- IMAGE SLIDER -->
        <div class="slide-one-item home-slider owl-carousel">
            <div class="site-blocks-cover overlay" style="background-image: url(assets/images/bg_def4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-10">

                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(assets/images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-10">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- SEARCH FIELDS -->
        <div class="row justify-content-center" style="background-color:#F0E7D8;">
            <form class="form-search col-md-12" method="GET" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-2">
                        <label>Parish</label>
                        <select class="selectpicker" data-style="btn-light" data-width="100%" name="parish" title="Select Parish">
                            <option>Kingston & St. Andrew</option>
                            <option>Portland</option>
                            <option>St. Thomas</option>
                            <option>St. Catherine</option>
                            <option>St. Mary</option>
                            <option>St. Ann</option>
                            <option>Manchester</option>
                            <option>Clarendon</option>
                            <option>Hanover</option>
                            <option>Westmoreland</option>
                            <option>St. James</option>
                            <option>Trelawny</option>
                            <option>St. Elizabeth</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="properties">Property Type</label>
                        <select class="selectpicker" data-style="btn-light" data-width="100%" name="property_type" title="Select">
                            <option>Vacant Lot</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="listing">Listing Type</label>
                        <select class="selectpicker" data-style="btn-light" data-width="100%" name="listing_type" title="Select">
                            <option>Rent</option>
                            <option>Purchase</option>
                            <option>Lease</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="price">Min Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="min_price" class="form-control <?php if (isset($price_min_search_error)) {
                                                                                        echo "is-invalid";
                                                                                    } ?>" type="text" value="<?php echo $_SESSION['price_min_search'] ?>">
                        </div>

                    </div>
                    <div class="col-md-2">
                        <label for="price">Max Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="max_price" class="form-control <?php if (isset($price_max_search_error)) {
                                                                                        echo "is-invalid";
                                                                                    } ?>" type="text" value="<?php echo $_SESSION['price_max_search'] ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-success text-white btn-block rounded-2" role="submit" name="property_search" type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>

        <!-- SEARCH RESULTS -->
        <div class="site-section site-section-sm p-1 pt-5" style="background-color:#F0E7D8;">
            <div class="container">
                <div class="row mb-5">


                    <!-- Properties -->
                    <?php

                    if (mysqli_num_rows($result) != 0) {
                        //header('Location: ../property_search.php');
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo ' <div class="col-md-4 col-lg-3 mb-4">
                                <div class="property-entry h-100">
                                    <a href="property-details.html" class="property-thumbnail">
                                        <div class="offer-type-wrap">
                                            <span class="offer-type bg-primary px-3 p-2">' . $row['ListingType'] . '</span>
                                        </div>
                                        <img src="assets/images/img_9.jpg" alt="Image" class="img-fluid">
                                    </a>
                                    <div class="p-4 property-body">
                                        <h2 class="property-title">' . $row['PropertyID'] . '</h2>
                                        <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>' . $row['Parish'] . '</span>
                                        <strong class="property-price text-primary mb-3 d-block text-dark"> $' . $row['Price'] . '</strong>
                                        <ul class="property-specs-wrap mb-3 mb-lg-0">
                                            <li>
                                                <span class="property-specs">Beds</span>
                                                <span class="property-specs-number">' . $row['NumBedroom'] . '</span>
        
                                            </li>
                                            <li>
                                                <span class="property-specs">Baths</span>
                                                <span class="property-specs-number">' . $row['NumBathroom'] . '</span>
        
                                            </li>
                                            <li>
                                                <span class="property-specs">Acres</span>
                                                <span class="property-specs-number">' . $row['Size'] . '</span>
        
                                            </li>
                                        </ul>
        
                                    </div>
                                </div>
                            </div>';
                        }
                        //$_SESSION['search_results'] = $row;
                    } else {
                        if (isset($_GET['property_search'])) {
                            echo 'Sorry.. Nothing Found.';
                        } else {
                            echo 'Please make a search.';
                        }
                    }

                    ?>

                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>

</body>

</html>