<?php
session_start();

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
                            <!-- <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
                        <h1 class="mb-2">65 Garden Blvd</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">$132,250,500</strong></p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(assets/images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-10">
                            <!-- <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For Sale</span>
                        <h1 class="mb-2">Beverley Hills, JM</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">$180,000,500</strong></p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- SEARCH FIELDS -->
        <div class="row justify-content-center" style="background-color:#F0E7D8;">
            <form class="form-search col-md-12" method="POST" action="./validations/propertvalid.php" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-2">
                        <label>Parish</label>
                        <select class="selectpicker" data-style="btn-light" data-width="100%" name="parish_search" title="Select Parish">
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
                        <select class="selectpicker" data-style="btn-light" data-width="100%" name="property_type_search" title="Select">
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
                            <input type="text" name="price" class="form-control <?php if (isset($price_min_search_error)) {
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
                            <input type="text" name="price" class="form-control <?php if (isset($price_max_search_error)) {
                                                                                    echo "is-invalid";
                                                                                } ?>" type="text" value="<?php echo $_SESSION['price_max_search'] ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-success text-white btn-block rounded-2" role="button" href="#" name="property_search" type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>

        <!-- SEARCH RESULTS -->
        <div class="site-section site-section-sm p-1 pt-5" style="background-color:#F0E7D8;">
            <div class="container">
                <div class="row mb-5">
                    <!-- Properties -->
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-primary px-3 p-2">Sale</span>
                                </div>
                                <img src="assets/images/img_9.jpg" alt="Image" class="img-fluid">
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

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                    <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="assets/images/img_11.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Runaway Bay</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>87 Gold Road, Runaway Bay, St Ann, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$200,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">4 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">2</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Acres</span>
                                        <span class="property-specs-number">16</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-info">Lease</span>
                                </div>
                                <img src="assets/images/img_12.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Beverley Hills</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>86 Kingman Avenue, Beverley Hills, St Andrew, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$150,265,500</strong>
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
                                        <span class="property-specs-number">6</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                    <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="assets/images/img_4.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Pennycooke Heights</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 25 Pennywise Road, Montego Bay, St James, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$210,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">6 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">4</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Acres</span>
                                        <span class="property-specs-number">16</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                    <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="assets/images/img_5.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title"><a href="property-details.html">Doctors Cave</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 12 Hot Head Avenue, Montego Bay, St James, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$120,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">2 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">1</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Acres</span>
                                        <span class="property-specs-number">1.6</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-info">Lease</span>
                                </div>
                                <img src="assets/images/img_6.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Falmouth</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 Maple Road, Falmouth, Trewlawny, JM</span>
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
                                        <span class="property-specs-number">3</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                    <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="assets/images/img_10.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Treasure Beach</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>Treasure Beach, St elizabeth, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$168,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">5 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">4</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Acres</span>
                                        <span class="property-specs-number">10</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                    <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="assets/images/img_8.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Old Habour Bay</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 210 Old Habour Bay, St Catherine, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$142,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">3 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">1</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">SQ FT</span>
                                        <span class="property-specs-number">3.5</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-info">Lease</span>
                                </div>
                                <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title">Mona Height</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>Orchid Path, Kingston 6, JM</span>
                                <strong class="property-price text-primary mb-3 d-block text-dark">$113,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">2<sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">1</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Acres</span>
                                        <span class="property-specs-number">4</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>
</body>

</html>