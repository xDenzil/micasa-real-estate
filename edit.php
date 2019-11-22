<?php
//Doesn't work with include('db_connection.php');
$conn = mysqli_connect("localhost", "root", "", "mi_casa") or die("<h1>Could not connect to database.</h1>");

//$username = $_REQUEST['Username'];
$query = "SELECT * FROM register"; //WHERE Username ='".$username."'"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash; </title>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom-styles.css">
</head>

<body class="blu">
    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

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
                                    <a class="nav-link text-white" href="all-properties.php">All Properties</a>
                                </li>
                                <input class="btn btn-light rouund" type="button" value="Logout" onclick="window.location.href='logout.php'">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10 mt-lg-5">
                <h1 class="mb-2 text-white mt-lg-5">Update User Information</h1>
                <br>
            </div>
        </div>

        <div class="container bg-white p-0">
            <div class="row">
                <div class="col-3 bg-light p-0">
                    <div class="col p-5">
                        <h1>John</h1>
                        <h1>Brown</h1>
                    </div>
                </div>
                <div class="col-9 p-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php
                                            $status = "";
                                            if (isset($_POST['submit']) && $_POST['submit'] == 1) {
                                                $username = $_REQUEST['Username'];
                                                $firstname = $_REQUEST['FirstName'];
                                                $lastname = $_REQUEST['LastName'];
                                                $email = $_REQUEST['Email'];
                                                $phonenumber = $_REQUEST['Telephone'];
                                                $password = $_REQUEST['Password'];
                                                $password2 = $_REQUEST['Password2'];
                                                $update = "UPDATE register SET FirstName='" . $firstname . "', FirstName='" . $firstname . "', Email='" . $email . "', Telephone='" . $phonenumber . "',
                                                Password='" . $password . "', Password2='" . $password2 . "', WHERE UserName='" . $username . "'";

                                                mysqli_query($conn, $update) or die("<h1>Could not connect to database.</h1>");
                                                $status = "Record Updated Successfully. </br></br>
                                                <a href='Adminmenu.php'>View Updated Record</a>";
                                                echo '<p style="color:#FF0000;">' . $status . '</p>';
                                            } else {
                                                ?>
                                                <div>
                                                    <form name="form" method="post" action="">
                                                        <input type="hidden" name="new" value="1" />
                                                        <input name="username" type="hidden" value="<?php echo $row['UserName']; ?>" />
                                                        <p><input type="text" name="firstname" placeholder="Enter first Name" required value="<?php echo $row['FirstName']; ?>" /></p>
                                                        <p><input type="text" name="lastname" placeholder="Enter Last Name" required value="<?php echo $row['LastName']; ?>" /></p>
                                                        <p><input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row['Email']; ?>" /></p>
                                                        <p><input type="text" name="phonenumber" placeholder="Enter Telephone" required value="<?php echo $row['Telephone']; ?>" /></p>
                                                        <p><input type="text" name="password" placeholder="Enter Password update" required value="<?php echo $row['Password']; ?>" /></p>
                                                        <p><input type="text" name="password2" placeholder="Confirm password update" required value="<?php echo $row['Password2']; ?>" /></p>
                                                        <p><input name="submit" type="submit" value="Update" /></p>
                                                    </form>
                                                <?php } ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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