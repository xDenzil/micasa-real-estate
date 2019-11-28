<?php
session_start();
include './database/db_connection.php';

// UPDATE TEXT LABELS BASED ON IF IT'S AN ADD OR DELETE USER REQUEST
$_GET['action'] == 'edit' ? $formtitle = 'Edit Property' : $formtitle = 'Add Property';
$_GET['action'] == 'edit' ? $btntitle = 'Save Changes' : $btntitle = 'Create Property';


if ($_GET['action'] == 'add') {
    if (isset($_POST['submit'])) { // IF THE SUBMIT BUTTON WAS CLICKED
        include 'scripts/validate_update_property.php'; // VALIDATE ENTRIES

        if ((isset($_SESSION['errFlagEditProperty'])) && ($_SESSION['errFlagEditProperty']) == true) { // If there are errors
            foreach ($_SESSION as $key => $value) { // Show errors
                $$key = $value;
            }
        } else { // IF ALL VALID, SEND TO DATABASE
            $RegID = $_GET['RegID'];
            $address1 = $_SESSION['prop']['address1'];
            $address2 = $_SESSION['prop']['address2'];
            $city = $_SESSION['prop']['city'];
            $parish = $_SESSION['prop']['parish'];
            $size = $_SESSION['prop']['landsize'];
            $listingType = $_SESSION['prop']['listing_type'];
            $propertyType = $_SESSION['prop']['property_type'];
            $buildingType =  $_SESSION['prop']['building_type'];
            $bedroom =  $_SESSION['prop']['bedrooms'];
            $bathroom = $_SESSION['prop']['bathrooms'];
            $price = $_SESSION['prop']['price'];

            // echo "user id: " . $userID . " address1: " . $address1 . " address 2: " . $address2 . " city: " . $city . " parish: " .  $parish . " size:" . $size . " listype: " . $listingType . " proptype: " . $propertyType . " buildtype: " . $buildingType . "bedroom: " . $bedroom . " bathroom:" . $bathroom . "price:" .  $price;

            include 'database/db_connection.php';
            $query = "INSERT INTO `property`(`UserID`, `Address1`, `Address2`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
            VALUES ($RegID,'$address1','$address2','$city','$parish',$size,'$listingType','$propertyType','$buildingType',$bedroom,$bathroom,$price,'trsh');";
            $result = mysqli_query($conn, $query) or die("Failed to get data.");

            // REDIRECT TO SUCCESS PAGE
            $_SESSION['redirect']['path'] = 'adminmenu.php';
            $_SESSION['redirect']['header'] = 'Success';
            $_SESSION['redirect']['message'] = 'Property Added.';
            header('Location: error-or-success.php');
            $_SESSION['prop'] = null;
        }
    }
} else if ($_GET['action'] == 'edit') {
    if (isset($_POST['submit'])) { // IF THE SUBMIT BUTTON WAS PRESSED
        include 'scripts/validate_update_property.php'; // VALIDATE ENTRIES
        if ((isset($_SESSION['errFlagEditProperty'])) && ($_SESSION['errFlagEditProperty']) == true) { // If there are errors
            foreach ($_SESSION as $key => $value) { // SHOW ERRORS IF INVALID
                $$key = $value;
            }
        } else { // IF ALL DATA VALID, UPDATE DATABASE
            include './database/db_connection.php';
            $query = "UPDATE `property` SET `Address1`='" . $_SESSION['prop']['address1'] . "',`Address2`='" . $_SESSION['prop']['address2'] . "' ,`City`='" . $_SESSION['prop']['city'] . "',`Parish`='" . $_SESSION['prop']['parish'] . "',`Size`='" . $_SESSION['prop']['landsize'] . "',`ListingType`='" . $_SESSION['prop']['listing_type'] . "',`PropertyType`='" . $_SESSION['prop']['property_type'] . "',`BuildingType`='" . $_SESSION['prop']['building_type'] . "',`NumBedroom`=" . $_SESSION['prop']['bedrooms'] . ",`NumBathroom`=" . $_SESSION['prop']['bathrooms'] . ",`Price`=" . $_SESSION['prop']['price'] . " WHERE `PropertyID`=" . $_GET['propID'] . ";";
            $result = mysqli_query($conn, $query) or die("Failed to get data.");

            // REDIRECT TO SUCCESS PAGE
            $_SESSION['redirect']['path'] = 'adminmenu.php';
            $_SESSION['redirect']['header'] = 'Update Successful';
            $_SESSION['redirect']['message'] = 'Property Updated.';
            header('Location: error-or-success.php');
            $_SESSION['prop'] = null;
        }
    } else {
        include './database/db_connection.php';
        $query = "SELECT * FROM `property` WHERE PropertyID='" . $_GET['propID'] . "';";
        $result = mysqli_query($conn, $query) or die("Failed to get data.");

        if ($result->num_rows > 0) {
            /*If there are results, output data into the input boxes 
            so the user can see what they edit.*/
            while ($row = $result->fetch_assoc()) {
                $_SESSION['prop']['parish'] = $row['Parish'];
                $_SESSION['prop']['address1'] = $row['Address1'];
                $_SESSION['prop']['address2'] = $row['Address2'];
                $_SESSION['prop']['city'] = $row['City'];
                $_SESSION['prop']['landsize'] = $row['Size'];
                $_SESSION['prop']['listing_type'] = $row['ListingType'];
                $_SESSION['prop']['property_type'] = $row['PropertyType'];
                $_SESSION['prop']['building_type'] = $row['BuildingType'];
                $_SESSION['prop']['bedrooms'] = $row['NumBedroom'];
                $_SESSION['prop']['bathrooms'] = $row['NumBathroom'];
                $_SESSION['prop']['price'] = $row['Price'];
            }
        } else { // If the property couldn't be found reset all variables and show error page
            $_SESSION['prop'] = null;

            // REFIRECT TO ERROR PAGE
            $_SESSION['redirect']['header'] = 'ERROR';
            $_SESSION['redirect']['path'] = 'adminmenu.php';
            $_SESSION['redirect']['message'] = 'It seems you attempted something invalid.';
            header('Location: ./error-or-success.php');
        }
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

<body style="background-color:#F0E7D8;">

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

        <div class="site-section bg-black p-2 pt-4" name="nav-bg" style="height:120px;"></div>
        <div class="container m-5 mx-auto">
            <div class="row">

                <!-- ADMIN BLOCK -->
                <div class="col-12 col-md-12 col-lg-3 bg-light">
                    <div class="col-3 bg-light p-0">
                        <div class="col p-5">
                            <h1 class="text-black">Admin</h1>
                            <h1 class="text-black">Panel</h1>
                            <br>
                            <td><a class="btn btn-danger px-5" role="button" href="adminmenu.php">Go Back</a>
                        </div>
                    </div>
                </div>

                <!-- FORM -->

                <div class="col-12 col-md-12 col-lg-9 p-5 bg-white">
                    <h1 class="text-black"><?php echo $formtitle; ?></h1>

                    <form method="POST">
                        <!-- LOCATION -->
                        <div class="col-12">
                            <h4>Location</h4>

                            <!--- ADDRESS LINE 1 --->

                            <?php if (isset($address1_error)) {
                                echo $address1_error;
                            } ?>


                            <div class="form-group mt-4"><label>Address Line 1</label><input class="form-control <?php if (isset($address1_error)) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" type="text" name="address1" value="<?php echo $_SESSION['prop']['address1'] ?>"></div>

                            <!--- ADDRESS LINE 2 --->

                            <?php if (isset($address2_error)) {
                                echo $address2_error;
                            } ?>

                            <div class="form-group"><label>Address Line 2</label><input class="form-control <?php if (isset($address2_error)) {
                                                                                                                echo "is-invalid";
                                                                                                            } ?>" type="text" name="address2" value="<?php echo $_SESSION['prop']['address2'] ?>"></div>

                            <!--- CITY & PARISH SECTION --->


                            <?php if (isset($city_error)) {
                                echo $city_error;
                            } ?>

                            <?php if (isset($parish_error)) {
                                echo $parish_error;
                            } ?>

                            <div class="form-row">
                                <div class="form-group col-md-6"><label>City</label><input class="form-control <?php if (isset($city_error)) {
                                                                                                                    echo "is-invalid";
                                                                                                                } ?>" type="text" name="city" value="<?php echo $_SESSION['prop']['city'] ?>"></div>
                                <div class="form-group col-md-6"><label>Parish</label>
                                    <select class="selectpicker" data-style="btn-dark" data-width="100%" name="parish" title="<?php if ($_SESSION['prop']['parish'] == null) {
                                                                                                                                    echo 'Select Parish';
                                                                                                                                } else {
                                                                                                                                    echo $_SESSION['prop']['parish'];
                                                                                                                                } ?>">
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Kingston & St. Andrew') {
                                                    echo 'selected="selected"';
                                                } ?>>Kingston & St. Andrew</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Portland') {
                                                    echo 'selected="selected"';
                                                } ?>>Portland</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. Thomas') {
                                                    echo 'selected="selected"';
                                                } ?>>St. Thomas</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. Catherine') {
                                                    echo 'selected="selected"';
                                                } ?>>St. Catherine</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. Mary') {
                                                    echo 'selected="selected"';
                                                } ?>>St. Mary</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. Ann') {
                                                    echo 'selected="selected"';
                                                } ?>>St. Ann</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Manchester') {
                                                    echo 'selected="selected"';
                                                } ?>>Manchester</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Clarendon') {
                                                    echo 'selected="selected"';
                                                } ?>>Clarendon</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Hanover') {
                                                    echo 'selected="selected"';
                                                } ?>>Hanover</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Westmoreland') {
                                                    echo 'selected="selected"';
                                                } ?>>Westmoreland</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. James') {
                                                    echo 'selected="selected"';
                                                } ?>>St. James</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'Trelawny') {
                                                    echo 'selected="selected"';
                                                } ?>>Trelawny</option>
                                        <option <?php if ($_SESSION['prop']['parish'] == 'St. Elizabeth') {
                                                    echo 'selected="selected"';
                                                } ?>>St. Elizabeth</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <!-- DETAILS -->

                        <div class="col-12 mt-5">
                            <h4>Details</h4>

                            <!--- PROPERTY TYPE & LAND SIZE --->

                            <?php if (isset($property_type_error)) {
                                echo $property_type_error;
                            } ?>
                            <?php if (isset($landsize_error)) {
                                echo $landsize_error;
                            } ?>


                            <div class="form-row mt-4">
                                <div class="form-group col-md-6"><label>Property Type</label>
                                    <select class="selectpicker" data-style="btn-dark" data-width="100%" name="property_type" title="<?php if ($_SESSION['prop']['property_type'] == null) {
                                                                                                                                            echo 'Select';
                                                                                                                                        } else {
                                                                                                                                            echo $_SESSION['prop']['property_type'];
                                                                                                                                        } ?>">
                                        <option <?php if ($_SESSION['prop']['property_type'] == 'Vacant Lot') {
                                                    echo 'selected="selected"';
                                                } ?>>Vacant Lot</option>
                                        <option <?php if ($_SESSION['prop']['property_type'] == 'Residential') {
                                                    echo 'selected="selected"';
                                                } ?>>Residential</option>
                                        <option <?php if ($_SESSION['prop']['property_type'] == 'Commercial') {
                                                    echo 'selected="selected"';
                                                } ?>>Commercial</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6"><label>Land Size</label>
                                    <div class="input-group"><input type="text" name="landsize" class="form-control <?php if (isset($landsize_error)) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" type="text" value="<?php echo $_SESSION['prop']['landsize'] ?>">
                                        <div class="input-group-prepend"><span class="input-group-text">acres</span></div>
                                        <div class="input-group-append"></div>
                                    </div>
                                </div>
                            </div>



                            <!--- BUILDING TYPE, BEDROOMS AND BATHROOMS --->

                            <?php if (isset($building_type_error)) {
                                echo $building_type_error;
                            } ?>
                            <?php if (isset($bedrooms_error)) {
                                echo $bedrooms_error;
                            } ?>
                            <?php if (isset($bathrooms_error)) {
                                echo $bathrooms_error;
                            } ?>




                            <div class="form-row">
                                <div class="form-group col-md-4"><label>Building Type</label>
                                    <select class="selectpicker" data-style="btn-dark" data-width="100%" name="building_type" title="<?php if ($_SESSION['prop']['building_type'] == null) {
                                                                                                                                            echo 'Select';
                                                                                                                                        } else {
                                                                                                                                            echo $_SESSION['prop']['building_type'];
                                                                                                                                        } ?>">
                                        <option <?php if ($_SESSION['prop']['building_type'] == 'Housing') {
                                                    echo 'selected="selected"';
                                                } ?>>Housing</option>
                                        <option <?php if ($_SESSION['prop']['building_type'] == 'Apartment') {
                                                    echo 'selected="selected"';
                                                } ?>>Apartment</option>
                                        <option <?php if ($_SESSION['prop']['building_type'] == 'Town House') {
                                                    echo 'selected="selected"';
                                                } ?>>Town House</option>
                                        <option <?php if ($_SESSION['prop']['building_type'] == 'Office Space') {
                                                    echo 'selected="selected"';
                                                } ?>>Office Space</option>
                                        <option <?php if ($_SESSION['prop']['building_type'] == 'None') {
                                                    echo 'selected="selected"';
                                                } ?>>None</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4"><label># of Bedrooms</label><input type="number" name="bedrooms" min="0" class="form-control <?php if (isset($bedrooms_error)) {
                                                                                                                                                                    echo "is-invalid";
                                                                                                                                                                } ?>" type="text" value="<?php if (!isset($_SESSION['prop']['bedrooms'])) {
                                                                                                                                                                                                echo '0';
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo $_SESSION['prop']['bedrooms'];
                                                                                                                                                                                            } ?>"></div>
                                <div class="form-group col-md-4"><label># of Bathrooms</label><input type="number" name="bathrooms" min="0" class="form-control <?php if (isset($bathrooms_error)) {
                                                                                                                                                                    echo "is-invalid";
                                                                                                                                                                } ?>" type="text" value="<?php if (!isset($_SESSION['prop']['bathrooms'])) {
                                                                                                                                                                                                echo '0';
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo $_SESSION['prop']['bathrooms'];
                                                                                                                                                                                            } ?>"></div>
                            </div>


                            <!-- test -->

                            <?php if (isset($listing_type_error)) {
                                echo $listing_type_error;
                            } ?>

                            <?php if (isset($price_error)) {
                                echo $price_error;
                            } ?>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>ListingType</label>
                                    <select class="selectpicker" data-style="btn-dark" data-width="100%" name="listing_type" title="<?php if ($_SESSION['prop']['listing_type'] == null) {
                                                                                                                                        echo 'Select';
                                                                                                                                    } else {
                                                                                                                                        echo $_SESSION['prop']['listing_type'];
                                                                                                                                    } ?>">
                                        <option <?php if ($_SESSION['prop']['listing_type'] == 'Rent') {
                                                    echo 'selected="selected"';
                                                } ?>>Rent</option>
                                        <option <?php if ($_SESSION['prop']['listing_type'] == 'Purchase') {
                                                    echo 'selected="selected"';
                                                } ?>>Purchase</option>
                                        <option <?php if ($_SESSION['prop']['listing_type'] == 'Lease') {
                                                    echo 'selected="selected"';
                                                } ?>>Lease</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-8"><label>Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span></div><input type="text" name="price" class="form-control <?php if (isset($price_error)) {
                                                                                                                                                    echo "is-invalid";
                                                                                                                                                } ?>" type="text" value="<?php echo $_SESSION['prop']['price'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGES -->

                        <div class="col-12 mt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Main Image</h4>
                                </div>

                                <div class="col-md-6">
                                    <label>Required</label><br>


                                    <?php if (isset($_SESSION['preview_img_error'])) {
                                        echo $_SESSION['preview_img_error'];
                                    } ?>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_img" id="inputGroupFile01">
                                            <label class="custom-file-label text-black" for="inputGroupFile01">Choose</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row  align-items-end">
                                <div class="col-md-12 mb-4 mt-4">
                                    <h4>Gallery Images</h4>


                                </div>
                                <div class="col-md-6">
                                    <label>Optional</label><br>

                                    <?php if (isset($gallery_1_error)) {
                                        echo $gallery_1_error;
                                    } ?>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="gallery_1">
                                            <label class="custom-file-label text-black" for="inputGroupFile02">Choose</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <?php if (isset($gallery_2_error)) {
                                        echo $gallery_2_error;
                                    } ?>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03" name="gallery_2">
                                            <label class="custom-file-label text-black" for="inputGroupFile03">Choose</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <?php if (isset($gallery_3_error)) {
                                        echo $gallery_3_error;
                                    } ?>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile04" name="gallery_3">
                                            <label class="custom-file-label text-black" for="inputGroupFile04">Choose</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <?php if (isset($gallery_4_error)) {
                                        echo $gallery_4_error;
                                    } ?>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile05" name="gallery_4">
                                            <label class="custom-file-label text-black" for="inputGroupFile05">Choose</label>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="col-md-6">
                            <input class="btn btn-primary text-white btn-block rounded-2" role="submit" name="submit" type="submit" value="<?php echo $btntitle; ?>">
                        </div>
                    </form>


                </div>
            </div>

        </div>
        </div>



        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>

</body>

</html>