<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
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
    <div class="site-wrap">
        <div class="site-mobile-menu blu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="site-navbar bg-black">
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
                                    <a class="nav-link text-white" href="property-search.php">Search Properties</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-warning" href="user-dashboard.php">My Properties</a>
                                </li>
                                <input class="btn btn-light rouund" type="button" value="Logout" onclick="window.location.href='logout.php'">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section p-2 bg-white pt-4">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="site-section-title">
                        <br>
                        <h5>My Properties</h5>
                        <input class="btn btn-primary rouund" type="button" value="Add New" onclick="window.location.href='location.php'">
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

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.php" class="property-thumbnail">
                            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Mona Heights</h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 650 Garden Boulevard, Kingston 6, Jamaica</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$132,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">9</span>

                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-6"><input class="btn btn-success text-white btn-block rounded-2" role="button" href="#" name="edit-property" type="submit" value="Edit"></div>
                                <div class="col-6"><input class="btn btn-danger text-white btn-block rounded-2" role="button" href="#" name="delete-property" type="submit" value="Delete"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.php" class="property-thumbnail">
                            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Mona Heights</h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 650 Garden Boulevard, Kingston 6, Jamaica</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$132,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">9</span>

                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-6"><input class="btn btn-success text-white btn-block rounded-2" role="button" href="#" name="edit-property" type="submit" value="Edit"></div>
                                <div class="col-6"><input class="btn btn-danger text-white btn-block rounded-2" role="button" href="#" name="delete-property" type="submit" value="Delete"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.php" class="property-thumbnail">
                            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Mona Heights</h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 650 Garden Boulevard, Kingston 6, Jamaica</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$132,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">9</span>

                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-6"><input class="btn btn-success text-white btn-block rounded-2" role="button" href="#" name="edit-property" type="submit" value="Edit"></div>
                                <div class="col-6"><input class="btn btn-danger text-white btn-block rounded-2" role="button" href="#" name="delete-property" type="submit" value="Delete"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>

</html>