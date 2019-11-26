<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash;</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="5; url = '<?php echo $_SESSION['redirect']['path']; ?>" />
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
    <style type="text/css">
        html,
        body {
            height: 100%;
        }

        .full-page {
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body class="overlay">


    <section class="h-100 bg-light">
        <header class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="d-flex flex-column">

                    <h1 class="text-center text-primary"><b><?php echo $_SESSION['redirect']['header']; ?> !</b></h1>
                    <h5 class="text-center text-black"><?php echo $_SESSION['redirect']['message']; ?></h5><br>
                    <p class="text-center text-primary">Redirecting..</p>
                    <?php unset($_SESSION['redirect']); ?>

                </div>
            </div>
        </header>
    </section>

</body>

</body>

</html>