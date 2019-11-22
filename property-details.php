<?php


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

        <br><br><br>
        <div class="site-section site-section-sm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bg-white property-body border rounded">
                            <div class="row mb-5">
                                <div class="col-12 mb-4">
                                    <img src="assets/images/bg-def2.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-primary h1 mb-3">$1,000,500</strong>
                                </div>
                                <div class="col-md-6">
                                    <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                        <li>
                                            <span class="property-specs">Beds</span>
                                            <span class="property-specs-number">2 <sup>+</sup></span>

                                        </li>
                                        <li>
                                            <span class="property-specs">Baths</span>
                                            <span class="property-specs-number">2</span>

                                        </li>
                                        <li>
                                            <span class="property-specs">Acres</span>
                                            <span class="property-specs-number">7,000</span>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Property Type</span>
                                    <strong class="d-block">Residential</strong>
                                </div>
                                <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Building Type</span>
                                    <strong class="d-block">Apartment</strong>
                                </div>
                                <div class="col-md-6 col-lg-4 border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Listing For</span>
                                    <strong class="d-block">Rent</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="h4 text-black mb-3">Location</h2>
                                </div>
                                <div class="col">
                                    <span class="caption-text">Address Line 1</span>
                                    <strong class="d-block">5 Red Man Drive</strong>
                                </div>
                                <div class="col">
                                    <span class="caption-text">Address Line 2</span>
                                    <strong class="d-block">Mathew Park</strong>
                                </div>
                                <div class="col">

                                    <span class="caption-text">City</span>
                                    <strong class="d-block">Savanna-La-Mar</strong>
                                </div>
                                <div class="col">
                                    <span class="caption-text">Parish</span>
                                    <strong class="d-block">Westmoreland</strong>
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
                    </div>
                    <div class="col-lg-4">

                        <div class="bg-white widget border rounded">

                            <h3 class="h4 text-black widget-title mb-3">Owner</h3>

                            <div class="form-group">
                                <h2 class="text-primary">John Brown</h1>
                            </div>
                            <div class="form-group">
                                <p class="font-weight-bold">Email</p>
                                <p>johnbrown@gmail.com</p>
                            </div>
                            <div class="form-group">
                                <p class="font-weight-bold">Phone</p>
                                <p>876-399-6224</p>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Contact">
                            </div>
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