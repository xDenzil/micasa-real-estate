<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
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
                    <form class="form-search col-lg-8 col-md-8" method="POST" enctype="multipart/form-data" action="./scripts/imagevalid.php" style="margin-top: -100px;">
                        <div class="row  align-items-end">

                            <div class="col-md-12">
                                <h1 class="text-white">Preview / Main Image</h1>
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
                                <h1 class="text-white">Gallery Images</h1>


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

                            <div class="col-md-6">
                                <input class="btn btn-success text-white btn-block rounded-2" role="submit" name="add-image" type="submit" value="Finish">
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

        <!-- Getting the file name to show inside the input field -->
        <script type="text/javascript">
            $('.custom-file input').change(function(e) {
                $(this).next('.custom-file-label').html(e.target.files[0].name);
            });
        </script>

</body>

</html>