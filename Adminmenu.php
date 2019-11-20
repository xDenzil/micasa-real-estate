<?php
session_start();
//Doesn't work with include('db_connection.php');
$conn = mysqli_connect("localhost","root","","mi_casa") or die("<h1>Could not connect to database.</h1>");

// get results from database
$query = "SELECT * FROM register";
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");



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


        <!-- <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"">
    <div class=" container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">Registration</h1>
            </div>
        </div>
    </div>
    </div> -->
        <br><br><br>
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10 mt-lg-5">
                <h1 class="mb-2 text-white mt-lg-5">Admin Panel</h1>
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
                    <div class="col p-5">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Users</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Properties</a>
                        </div>
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
                                        // get results from database
                                        //$result = mysql_query("SELECT * FROM register") or die("<h1>Could not connect to database.</h1>");
                                           echo'<table class="table table-borderless table-responsive">';
                                                echo'<thead class="thead-dark">';
                                                    echo "<tr>";
                                                        echo'<th scope="col">Username</th>';
                                                        echo'<th scope="col">Firstname</th>';
                                                        echo'<th scope="col">Lastname</th>';
                                                        echo'<th scope="col">Email</th>';
                                                        echo'<th scope="col"></th>';
                                                        echo'<th scope="col"></th>';
                                                    echo"</tr>";
                                                echo"</thead>";
                                               echo"<tbody>";
                                               // loop through results of database query, displaying them in the table
                                               while($row = mysqli_fetch_array( $result )) {
                                                    echo"<tr>";
                                                       echo '<th scope="row" class="pt-4">'.$row['Username'].'</th>';
                                                        echo '<td class="pt-4">'.$row['FirstName'].'</td>';
                                                        echo '<td class="pt-4">'.$row['LastName'].'</td>';
                                                        echo '<td class="pt-4">'.$row['Email'].'</td>';

                                                       echo '<td><input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit"> <a href="edit.php?username=' . $row['Username'] . '"></a></td>';
                                                       echo '<td><input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete"><a href="delete.php?username=' . $row['Username'] . '"></a></td>';
                                                    echo "</tr>";
                                               }
                                                echo"</tbody>";
                                            echo"</table>";
                                            ?>
                                            <p><a href="registration.php">Add a new User</a></p>
                                        </div>


                                    </div>
                                </div>

                                <div class="tab-pane" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="container">

                                        <div class="row mb-5">

                                            <div class="col-md-6 col-lg-4 mb-4">
                                                <div class="property-entry h-100">
                                                    <a href="property-details.html" class="property-thumbnail">
                                                        <div class="offer-type-wrap">
                                                            <span class="offer-type bg-danger">Sale</span>
                                                            <span class="offer-type bg-success">Rent</span>
                                                        </div>
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
                                                            <li>
                                                            <input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit">
                                                            </li>
                                                            <li>
                                                            <input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete">
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 mb-4">
                                                <div class="property-entry h-100">
                                                    <a href="property-details.html" class="property-thumbnail">
                                                        <div class="offer-type-wrap">
                                                            <span class="offer-type bg-info">Lease</span>
                                                        </div>
                                                        <img src="images/img_6.jpg" alt="Image" class="img-fluid">
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
                                                            <li>
                                                            <input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit">
                                                            </li>
                                                            <li>
                                                            <input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete">
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 mb-4">
                                                <div class="property-entry h-100">
                                                    <a href="property-details.html" class="property-thumbnail">
                                                        <div class="offer-type-wrap">
                                                            <span class="offer-type bg-danger">Sale</span>
                                                            <span class="offer-type bg-success">Rent</span>
                                                        </div>
                                                        <img src="images/img_10.jpg" alt="Image" class="img-fluid">
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
                                                            <li>
                                                            <input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit">
                                                            </li>
                                                            <li>
                                                            <input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete">
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 mb-4">
                                                <div class="property-entry h-100">
                                                    <a href="property-details.html" class="property-thumbnail">
                                                        <div class="offer-type-wrap">
                                                            <span class="offer-type bg-danger">Sale</span>
                                                            <span class="offer-type bg-success">Rent</span>
                                                        </div>
                                                        <img src="images/img_8.jpg" alt="Image" class="img-fluid">
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
                                                            <li>
                                                            <input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit">
                                                            </li>
                                                            <li>
                                                            <input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete">
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-lg-4 mb-4">
                                                <div class="property-entry h-100">
                                                    <a href="property-details.html" class="property-thumbnail">
                                                        <div class="offer-type-wrap">
                                                            <span class="offer-type bg-info">Lease</span>
                                                        </div>
                                                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
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
                                                            <li>
                                                            <input type="submit" class="btn btn-success text-white rouund m-0" role="button" value="Edit">
                                                            </li>
                                                            <li>
                                                            <input type="submit" class="btn btn-danger rouund m-0" role="button" value="Delete">
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br><br>



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