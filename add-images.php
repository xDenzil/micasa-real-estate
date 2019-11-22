<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ((isset($_SESSION['errFlagAddProperty'])) && ($_SESSION['errFlagAddProperty']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
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

<body>


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
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="property-search.php">Search Properties</a>
                                </li>
                                <input class="btn btn-light rouund" type="button" value="Logout" onclick="window.location.href='logout.php'">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION HEADER -->
    <div class="site-blocks-cover inner-page-cover overlay bg-primary" style="background-image: url(assets/images/bg_def2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"">
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
            <div class="row mb-5 justify-content-center">
                <form class="form-search col-lg-6 col-md-8" method="POST" action="./scripts/imagesvalid.php" style="margin-top: -100px;">
                    <div class="row  align-items-end">

                        <div class="col-md-12">
                            <h1 class="text-white">Preview / Main Image</h1>
                            <?php if (isset($preview_img_error)) {
                                echo $preview_img_error;
                            } ?>
                        </div>

                        <div class="col-md-6">
                            <label>Required</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row  align-items-end">
                        <div class="col-md-12 mb-4 mt-4">
                            <h1 class="text-white">Gallery Images</h1>

                            <?php if (isset($gallery_img_error)) {
                                echo $gallery_img_error;
                            } ?>
                        </div>
                        <div class="col-md-6">
                            <label>Optional</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input class="btn btn-success text-white btn-block rounded-2" role="submit" name="add-images" type="submit" value="Finish">
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
    <?php include 'footer.php'; ?>

</body>

</html>