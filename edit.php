<?php
//session_start();
include 'database/db_connection.php';
//include 'scripts/validate_update_user.php';
$RegID=$_REQUEST['RegID'];
$query = "SELECT * FROM register WHERE RegID ='".$RegID."'"; 
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");

    while($row = mysqli_fetch_assoc($result)) {     
        $firstname = $row['FirstName'];
        $lastname= $row['LastName'];
        $username = $row['Username'];
        $email = $row['Email'];
        $areacode = $row['Telephone'];
        $phonenumber = $row['Telephone'];
        $password = $row['Password'];
    }
    if(isset($_POST['Update']))
    {   
        /*//$RegID = $_POST['RegID'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phonenumber=$_POST['phonenumber'];
        $username=$_POST['username'];
        $password=$_POST['password'];*/
        include 'scripts/validate_update_user.php'; // Validate if the entries are correct
        if ((isset($_SESSION['errFlagEditPage'])) && ($_SESSION['errFlagEditPage']) == true) { 
            foreach ($_SESSION as $key => $value) { // Show errors
                $$key = $value;
            }
        }else{
            $RegID = $_REQUEST['RegID'];
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $areacode=$_POST['areacode'];
            $phonenumber=$_POST['phonenumber'];
            $username=$_POST['username'];
            $password=$_POST['password'];

            $Update_query = "UPDATE register SET 
            FirstName='$firstname',
            LastName='$lastname', 
            Email='$email',
            Telephone='$areacode$phonenumber',
            Username ='$username',
            Password = '$password'
            WHERE RegID= '$RegID'";   
            mysqli_query($conn, $Update_query) or die("<h1>Could not connect to database.</h1>");
            //Redirect if Successful
            header("Location: Adminmenu.php");
        }
    }
    
    
 
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
                                                <!-- UPDATE FORM -->
                                                <form action="" method="POST" >
                                                        <h1>User Information</h1>

                                                            <p class="m-0">Please add updates to the relevant fields.</p>
                                                            <div class="form-row mt-2">
                                                            <!--- FIRST NAME & LAST NAME SECTION --->
                                                                <?php if (isset($firstname_error)) {
                                                                    echo $firstname_error;
                                                                } ?>
                                                                <?php if (isset($lastname_error)) {
                                                                    echo $lastname_error;
                                                                }

                                                                ?>
                                                                <div class="form-row mt-2">
                                                                    <div class="form-group col-md-6"><label>First Name</label>
                                                                    <input class="form-control <?php if (isset($firstname_error)) { 
                                                                        echo "is-invalid"; } ?>" type="text" name="firstname" value="<?php echo $firstname; ?>"></div>
                                                                    <div class="form-group col-md-6"><label>Last Name</label><input class="form-control 
                                                                    <?php if (isset($lastname_error)) { echo "is-invalid"; } ?>" type="text" name="lastname" value="<?php echo $lastname; ?>"></div>
                                                                </div>


                                                            <!--- USERNAME AND EMAIL SECTION --->
                                                            <?php if (isset($username_error)) {
                                                                        echo $username_error;
                                                                    } ?>
                                                                    <?php if (isset($email_error)) {
                                                                        echo $email_error;
                                                                    } ?>
                                                                <div class="form-row">
                                                                <div class="form-group col-md-6"><label>Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">@</span>
                                                                    </div><input class="form-control <?php if (isset($username_error)) { echo "is-invalid"; } ?>" 
                                                                    type="text" name="username" value="<?php echo $username; ?>">
                                                                    <div class="input-group-append"></div>
                                                                </div>
                                                                </div>
                                                                <div class="form-group col-md-6"><label>Email Address</label><input class="form-control 
                                                                <?php if (isset($email_error)) { echo "is-invalid"; } ?>" type="text" name="email" value="
                                                                <?php echo $email; ?>"></div>
                                                            </div>
                                                            </div>
                                                           
                                                            <!--- PHONE NUMBER SECTION --->
                                                            <?php if (isset($areacode_error)) {
                                                                echo $areacode_error;
                                                            } ?>
                                                            <?php if (isset($phonenumber_error)) {
                                                                echo $phonenumber_error;
                                                            } ?>
                                                             <div class="form-group"><label>Phone Number</label>
                                                                <div class="form-row">
                                                                <div class="col col-md-5">
                                                                    <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">+1</span></div><input class="form-control 
                                                                    <?php if (isset($areacode_error)) {
                                                                    echo "is-invalid";
                                                                    } ?>" type="text" name="areacode" value="<?php echo $areacode ?>">
                                                                    <div class="input-group-append"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-md-7"><input class="form-control 
                                                                <?php if (isset($phonenumber_error)) {
                                                                echo "is-invalid";
                                                                } ?>" type="text" name="phonenumber" value="<?php echo $phonenumber ?>"></div>
                                                                </div>
                                                            </div>        

                                                            

                                                            <!--- PASSWORDS SECTION --->         
                                                            <?php if (isset($password_error)) {
                                                                echo $password_error;
                                                            } ?>
                                                             <div class="form-group"><label>Password</label><input class="form-control 
                                                                <?php if (isset($password_error)) {
                                                                echo "is-invalid";
                                                                } ?>" type="password" name="password" value="<?php echo $password ?>"></div>
                                                            
                                                            
                                                            <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="Update" value="Update Record"></input>
                                                            
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
            
 <!-- FOOTER -->
 <?php include 'blocks/footer.php'; ?>
</body>

</html>