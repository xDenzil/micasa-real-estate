<?php
session_start();
include './database/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash; </title>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom-styles.css">
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
                                                <div>
                                                <?php
                                                    if(isset($_POST['submit'])){//if the submit button is clicked                                                  
                                                    $firstname = $_POST['updatefirstname'];
                                                    $lastname = $_POST['updatelastname'];
                                                    $email = $_POST['updateemail'];                                                    
                                                    $phonenumber = $_POST['updatephone'];                                                                                      
                                                    $password = $_POST['updatepassword'];
                                                        
                                                    $update = "UPDATE register SET FirstName='$firstname', LastName='$lastname', Email='$email', Telephone='$phonenumber', Password='$password' WHERE RegID = ".$RegID;
                                                    $conn->query($update) or die("<h1>Could not Update database.</h1>");//update or error
                                                    
                                                    //Create a query
                                                    $result = "SELECT * FROM register WHERE RegID = '".$RegID."'";
                                                    //submit the query and capture the result
                                                    mysqli_query($conn, $update) or die("<h1>Could not connect to database.</h1>");
                                                    }
                                                    
                                                    while (isset($row) == $result) 
                                                    {
                                                ?>
    
                                                    <form name="form" method="post" action="">
                                                        <h1>User Information</h1>
                                                            <p class="m-0">Please add Updates to the relevant fields.</p>
                                                            <div class="form-row mt-2">
                                                                <div class="form-group col-md-6"><label>First Name</label>
                                                                <input class="form-control" type="text" name="updatefirstname" value="<?php echo $row['FirstName']; ?>"></div>
                                                                <div class="form-group col-md-6"><label>Last Name</label><input class="form-control" type="text" name="updatelastname" value="<?php echo $row['LastName']; ?>"></div>
                                                            </div>


                                                            <!--- USERNAME AND EMAIL SECTION --->

                                                                <div class="form-row">
                                                                <div class="form-group col-md-6"><label>Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">@</span>
                                                                    </div><input class="form-control" type="text" name="updateusername" value="<?php echo $row['Username'] ?>">
                                                                    <div class="input-group-append"></div>
                                                                </div>
                                                                </div>
                                                                <div class="form-group col-md-6"><label>Email Address</label><input class="form-control" type="text" name="updateemail" value="
                                                                <?php echo $_row['Email'] ?>"></div>
                                                            </div>

                                                            <!--- PHONE NUMBER SECTION --->
                                                            <div class="form-group"><label>Phone Number</label>
                                                                <div class="form-row">
                                                                <div class="col col-md-5">
                                                                    <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">+1</span></div><input class="form-control" type="text" name="areacode" value="">
                                                                    <div class="input-group-append"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-md-7"><input class="form-control" type="text" name="updatephone" value="<?php echo $row['Telephone'] ?>"></div>
                                                                </div>
                                                            </div>


                                                            <!--- PASSWORDS SECTION --->         

                                                            <div class="form-group"><label>Password</label><input class="form-control" type="password" name="updatepassword" value="<?php echo $row['Password'] ?>"></div>
                                                            <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="submit" value="Update Record"></input>
                                                            <?php
                                                         }
                                                         $update ="";
                                                         if($update){//if the update worked
                                                            
                                                            echo "<b>Update successful!</b>";  
                                                            }
                                                              
                                                            ?>
                                                     </form>
                                                    
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

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/mediaelement-and-player.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/aos.js"></script>

        <script src="js/main.js"></script>
</body>

</html>