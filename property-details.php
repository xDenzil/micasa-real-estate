<?php
session_start();

$propertyID = $_GET['propID']; //Getting Property ID to use in the Query from the GET in Link


include './database/db_connection.php'; // Connect to Database
$query = "SELECT * FROM `property` WHERE PropertyID='$propertyID';"; // To Display the Property Info
$result = mysqli_query($conn, $query) or die("Failed to get data.");


$query2 = "SELECT * FROM register, property WHERE (register.RegID = property.userID) AND property.PropertyID = $propertyID;";
$result2 = mysqli_query($conn, $query2) or die("Failed to get data.");


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

        <div class="site-section p-2 bg-black pt-4" name="nav-bg" style="height:120px;"></div>
        <div class="site-section site-section-sm" style="background-color:#F0E7D8;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <?php

                        if (mysqli_num_rows($result) != 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="bg-white property-body border rounded">
                                <div class="row mb-5">
                                    <div class="col-12 mb-4">
                                        <img src="uploads/' . $row['PreviewImageURL'] . '" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="col-md-6">
                                        <strong class="text-primary h1 mb-3">$' . $row['Price'] . '</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
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
                                <div class="row mb-5">
                                    <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                        <span class="d-inline-block text-black mb-0 caption-text">Property Type</span>
                                        <strong class="d-block">' . $row['PropertyType'] . '</strong>
                                    </div>
                                    <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                        <span class="d-inline-block text-black mb-0 caption-text">Building Type</span>
                                        <strong class="d-block">' . $row['BuildingType'] . '</strong>
                                    </div>
                                    <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                        <span class="d-inline-block text-black mb-0 caption-text">Listing For</span>
                                        <strong class="d-block">' . $row['ListingType'] . '</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="h4 text-black mb-3">Location</h2>
                                    </div>
                                    <div class="col">
                                        <span class="caption-text">Address Line 1</span>
                                        <strong class="d-block">' . $row['Address1'] . '</strong>
                                    </div>
                                    <div class="col">
                                        <span class="caption-text">Address Line 2</span>
                                        <strong class="d-block">' . $row['Address2'] . '</strong>
                                    </div>
                                    <div class="col">
    
                                        <span class="caption-text">City</span>
                                        <strong class="d-block">' . $row['City'] . '</strong>
                                    </div>
                                    <div class="col">
                                        <span class="caption-text">Parish</span>
                                        <strong class="d-block">' . $row['Parish'] . '</strong>
                                    </div>
                                </div>
    
    
    
    
    
    
                                <div class="row no-gutters mt-5">
                                    <div class="col-12">
                                        <h2 class="h4 text-black mb-3">Gallery</h2>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="assets/images/img_1.jpg" class="image-popup gal-item"><img src="assets/images/img_1.jpg" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="assets/images/img_2.jpg" class="image-popup gal-item"><img src="assets/images/img_2.jpg" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="assets/images/img_3.jpg" class="image-popup gal-item"><img src="assets/images/img_3.jpg" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="assets/images/img_4.jpg" class="image-popup gal-item"><img src="assets/images/img_4.jpg" alt="Image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
    ';
                            }
                        } else {
                            echo '';
                        }

                        ?>

                    </div>
                    <div class="col-lg-4">

                        <div class="bg-white widget border rounded">

                            <h3 class="h4 text-black widget-title mb-3">Owner</h3>
                            <?php
                            if (mysqli_num_rows($result2) != 0) {
                                //header('Location: ../property_search.php');
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    echo '<div class="form-group">
                                    <h2 class="text-primary">' . $row2['FirstName'] . " " . $row2['LastName'] . '</h1>
                                </div>
                                <div class="form-group">
                                    <p class="font-weight-bold">Email</p>
                                    <p>' . $row2['Email'] . '</p>
                                </div>
                                <div class="form-group">
                                    <p class="font-weight-bold">Phone</p>
                                    <p>' . $row2['Telephone'] . '</p>
                                </div>
                                <div class="form-group">
                                    <input type="button" id="phone" class="btn btn-primary" value="Contact" onclick="window.location.href=\'mailto:' . $row2['Email'] . '\'">
                                </div>';
                                }
                            } else {
                                echo ' Something went wrong.';
                            }

                            ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</body>

<!-- FOOTER -->
<?php include 'blocks/footer.php'; ?>

</body>

</html>