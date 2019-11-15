<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom-styles.css">

</head>
<body>


    <div class="site-wrap"></div>


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
                                <a class="nav-link text-white" href="property-search.php">Search Properties</a>
                            </li>
                            <input class="btn btn-primary rouund" type="button" value="Login" onclick="window.location.href='login.php'">
                            <input class="btn btn-light rouund" type="button" value="Register" onclick="window.location.href='registration.php'">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="section blu">
        <div class="container">
            <br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-4 bg-white m-5 rounded">

                    <form action="./validations/regisvalid.php" method="POST" class="p-4">
                        <div class="form-group"><label>Email Address</label><input class="form-control <?php if (isset($password_error)) {
                                                                                                            echo "is-invalid";
                                                                                                        } ?>" type="password" name="password" value="<?php echo $_SESSION['password'] ?>"></div>
                        <div class="form-group"><label>Password</label><input class="form-control <?php if (isset($passwordconfirm_error)) {
                                                                                                        echo "is-invalid";
                                                                                                    } ?>" type="password" name="passwordconfirm" value="<?php echo $_SESSION['passwordconfirm'] ?>"></div>


                        <!--- CONTINUE BUTTON --->
                        <input class="btn btn-primary roundbut col-md-12 mt-4 mb-3" type="submit" name="login" value="Login"></input>
                    </form>
                </div>
            </div>

        </div>

    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <h3 class="footer-heading mb-4">About Mi Casa</h3>
                        <p>Fast growing Real Estate Company at 237 Old Hope Road, Kingston 6, Jamaica. We offer the best solutions to all your real estate problems! We specialize in locating suitable properties and offering expert advice to our clients.</p>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="footer-heading mb-4">Follow Us</h3>
                    <div>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>



                </div>

            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-12">
                    <p>

                        Copyright
                        &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Kelleshia Kinlocke & Denzil Williams

                    </p>
                </div>

            </div>
        </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>