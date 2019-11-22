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

        <!-- LOGIN -->

        <div class="section blu">
            <div class="container">
                <br><br><br><br>
                <div class="row justify-content-center">
                    <div class="col-md-4 bg-white m-5 rounded">

                        <form action="scripts/login.php" method="POST" class="p-4">
                            <div class="form-group"><label>Username</label><input required class="form-control 
                        <?php if (isset($_SESSION['login_error'])) { //If Log-In Error is Set in the session, Set class to 'invalid', this highlights the box with a red border
                            echo "is-invalid";
                        } ?>" type="text" name="username_try" value="<?php echo $_SESSION['username_try'] //Keep username attempt in input box after reload 
                                                                        ?>"></div>


                            <div class="form-group"><label>Password</label><input required class="form-control 
                        <?php if (isset($_SESSION['login_error'])) {
                            echo "is-invalid";
                        } ?>" type="password" name="password_try"></div>

                            <?php if (isset($_SESSION['login_error'])) {
                                echo $_SESSION['login_error'];
                            } ?>

                            <p>Don't have an account? <a href="registration.php">Sign Up</a></p>


                            <!--- LOGIN BUTTON --->
                            <input class="btn btn-primary roundbut col-md-12 mt-4 mb-3" type="submit" name="login" value="Login"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>
</body>

</html>