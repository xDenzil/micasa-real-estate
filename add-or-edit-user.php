<?php
session_start();
include './database/db_connection.php';
$RegID = $_REQUEST['RegID'];

// UPDATE TEXT LABELS BASED ON IF IT'S AN ADD OR DELETE USER REQUEST
$_GET['action'] == 'edit' ? $formtitle = 'Update User Information' : $formtitle = 'Create User Account';
$_GET['action'] == 'edit' ? $btntitle = 'Save Changes' : $btntitle = 'Create User';


// IF AN EDIT USER REQUEST
if ($_GET['action'] == 'edit') {

    // CONNECT TO DB AND POPULATE FIELDS WITH EXISTING DATA
    include './database/db_connection.php';
    $query = "SELECT * FROM register WHERE RegID ='" . $RegID . "'";
    $result = mysqli_query($conn, $query) or die("<h1>Could not get data.</h1>");

    while ($row = mysqli_fetch_assoc($result)) {
        $firstname = $row['FirstName'];
        $lastname = $row['LastName'];
        $username = $row['Username'];
        $email = $row['Email'];
        $areacode = substr($row['Telephone'], 0, -7);
        $phonenumber = substr($row['Telephone'], 3);
        $password = $row['Password'];
    }
    // IF THE USER PRESSES THE SUBMIT BUTTON, VALIDATE INPUT THEN SEND TO DATABASE ONLY IF VALID

    if (isset($_POST['Submit'])) {

        include 'scripts/validate_update_user.php';
        if ((isset($_SESSION['errFlagEditPage'])) && ($_SESSION['errFlagEditPage']) == true) {
            foreach ($_SESSION as $key => $value) { // SHOW ERRORS ON PAGE
                $$key = $value;
            }
        } else {
            $RegID = $_REQUEST['RegID'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $areacode = $_POST['areacode'];
            $phonenumber = $_POST['phonenumber'];
            $username = $_POST['username'];
            $password = $_POST['password'];


            include './database/db_connection.php';
            $query = "UPDATE register SET FirstName='$firstname',LastName='$lastname', Email='$email',Telephone='$areacode$phonenumber',Username ='$username',Password = '$password' WHERE RegID= '$RegID';";
            mysqli_query($conn, $query) or die("<h1>Could not get data.</h1>");


            // REDIRECT TO ADMIN MENU PAGE
            $_SESSION['redirect']['header'] = 'SUCCESS';
            $_SESSION['redirect']['path'] = 'adminmenu.php';
            $_SESSION['redirect']['message'] = 'User Account Updated.';
            header('Location: ./error-or-success.php');
        }
    }
} else if ($_GET['action'] == 'add') { // IF AN ADD USER REQUEST
    if (isset($_POST['Submit'])) { // IF THE USER PRESSES THE SUBMIT BUTTON, VALIDATE ENTRIES THEN SEND TO DB IF VALID

        include 'scripts/validate_update_user.php'; // VALIDATE ENTRIES
        if ((isset($_SESSION['errFlagEditPage'])) && ($_SESSION['errFlagEditPage']) == true) {
            foreach ($_SESSION as $key => $value) { // SHOW ERRORS
                $$key = $value;
            }
        } else { // IF NO ERRORS, UPDATE DATABASE
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $areacode = $_POST['areacode'];
            $phonenumber = $_POST['phonenumber'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            include './database/db_connection.php';
            $query = "INSERT INTO `register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) VALUES ('$firstname', '$lastname', '$email','$areacode$phonenumber','$username','$password');";
            mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");

            // REDIRECT TO ADMIN MENU
            $_SESSION['redirect']['header'] = 'Success';
            $_SESSION['redirect']['path'] = 'adminmenu.php';
            $_SESSION['redirect']['message'] = 'User Account created successfully.';
            header('Location: ./error-or-success.php');
        }
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

<body style="background-color:#F0E7D8;">
    <!-- NAVIGATION -->
    <?php
    switch ($_SESSION['userLevel']) {
        case "user": // logged in user
            require_once('blocks/user-navigation.php');
            break;
        case "admin": // admin user
            require_once('blocks/admin-navigation.php');
            break;
        default: // guest
            require_once('blocks/guest-navigation.php');
            break;
    }
    ?>
        <div class="site-section bg-black p-2 pt-4" name="nav-bg" style="height:120px;"></div>

        <div class="container bg-white p-0 m-5 mx-auto">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3 bg-light p-0">
                    <div class="col p-5">
                        <h1 class="text-black">Admin</h1>
                        <h1 class="text-black">Panel</h1>
                        <br>
                        <a class="btn btn-danger btn-block" role="button" href="adminmenu.php">Go Back</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 p-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <!-- UPDATE FORM -->
                                                <form action="" method="POST">
                                                    <h1 class="text-black"><?php echo $formtitle; ?></h1>
                                                    <p class="m-0">Please complete the form.</p>
                                                    <div class="form-row mt-2">
                                                        <!--- FIRST NAME & LAST NAME SECTION --->
                                                        <?php if (isset($firstname_error)) {
                                                            echo $firstname_error;
                                                        } ?>
                                                        <?php if (isset($lastname_error)) {
                                                            echo $lastname_error;
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <div class="form-group col-md-6"><label>First Name</label>
                                                            <input class="form-control <?php if (isset($firstname_error)) {
                                                                                            echo "is-invalid";
                                                                                        } ?>" type="text" name="firstname" value="<?php echo $firstname; ?>"></div>
                                                        <div class="form-group col-md-6"><label>Last Name</label><input class="form-control 
                                                                    <?php if (isset($lastname_error)) {
                                                                        echo "is-invalid";
                                                                    } ?>" type="text" name="lastname" value="<?php echo $lastname; ?>"></div>
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
                                                                </div><input class="form-control <?php if (isset($username_error)) {
                                                                                                        echo "is-invalid";
                                                                                                    } ?>" type="text" name="username" value="<?php echo $username; ?>">
                                                                <div class="input-group-append"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6"><label>Email Address</label><input class="form-control 
                                                                <?php if (isset($email_error)) {
                                                                    echo "is-invalid";
                                                                } ?>" type="text" name="email" value="<?php echo $email; ?>">
                                                        </div>
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


                                            <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="Submit" value="<?php echo $btntitle ?>"></input>

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


        <!-- FOOTER -->
        <?php include 'blocks/footer.php'; ?>
</body>

</html>