<?php

session_start();
$loggedInUser = $_SESSION['currentUserID'];

include './database/db_connection.php'; // Connect to Database
$query = "SELECT * FROM `property` WHERE userID='$loggedInUser';"; // To Display the Property Info
$result = mysqli_query($conn, $query) or die("Failed to get data / Nothing to show.");

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

<body class="overlay bg-black">


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
        <div class="site-section p-2 bg-black pt-4" name="nav-bg" style="height:120px;"></div>

        <div class="site-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="site-section-title">
                            <br>
                            <h5>My Properties</h5>
                            <input class="btn btn-primary rouund" type="button" value="Add New" onclick="window.location.href='add-property.php'">
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- LISTINGS SECTION -->
        <div class="site-section site-section-sm p-1 pt-5" style="background-color:#F0E7D8;">
            <div class="container">
                <div class="row"></div>
                <div class="row mb-5">

                    <!-- Properties -->
                    <?php

                    if (mysqli_num_rows($result) != 0) {
                        //header('Location: ../property_search.php');
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo ' <div class="col-md-4 col-lg-3 mb-4">
                                <div class="property-entry"> 
                                    <a href="property-details.php?propID=' . $row['PropertyID'] . '" class="property-thumbnail">
                                        <div class="offer-type-wrap">
                                            <span class="offer-type bg-primary px-3 p-2">' . $row['ListingType'] . '</span>
                                        </div>
                                        <img src="uploads/' . $row['PreviewImageURL'] . '" alt="Image" class="img-fluid">
                                    </a>
                                    <div class="p-4 property-body">
                                        <h2 class="property-title">' . $row['Address1'] . '</h2>
                                        <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>' . $row['City'] . ", " . $row['Parish'] . '</span>
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
                                        <br>

                                <div class="row">
                                <div class="col-6"><input class="btn btn-success text-white btn-block rounded-2" role="button" onclick="window.location.href=\'edit-property.php?propID=' . $row['PropertyID'] . '\'" name="edit-property" type="submit" value="Edit"></div>
                                <div class="col-6"><input class="btn btn-danger text-white btn-block rounded-2" role="button"  onclick="window.location.href=\'scripts/delete-property.php?propID=' . $row['PropertyID'] . '\'"name="delete-property" type="submit" value="Delete"></div>
                                </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        //$_SESSION['search_results'] = $row;
                    } else {

                        echo '<a class="mx-auto">You have no properties at the moment.</a>';
                    }


                    ?>

                </div>

            </div>
        </div>


        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>

</body>

</html>