<?php

session_start();


if ((isset($_SESSION['errFlagPage1'])) && ($_SESSION['errFlagPage1']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
  foreach ($_SESSION as $key => $value) { //USE SESSION VARIABLE AS KEY VARIABLE TO ASSIGN VALUES
    $$key = $value;
  }
}
//Doesn't work with "include('db_connection.php');" for me
$conn = mysqli_connect("localhost", "root", "", "mi_casa") or die("<h1>Could not connect to database.</h1>");
//Check if form is submitted
if (isset($_POST['new']) && $_POST['new'] == 1) {
  $username = $_REQUEST['Username'];
  $firstname = $_REQUEST['FirstName'];
  $lasttname = $_REQUEST['LastName'];
  $email = $_REQUEST['Email'];
  $phonenumber = $_REQUEST['Telephone'];
  $password = $_REQUEST['Password'];
  $password2 = $_REQUEST['Password2'];
  $query = "INSERT INTO resgister (`Username`,`FirstName`,`LastName`,`Email`,`Telephone`,`Password`,`Password2`,)VALUES('$username','$firstname','$lastname','$email','$phonenumber','$password','$password2')";
  mysqli_query($conn, $query) or die("Could not insert Data");
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

  <!-- NAVIGATION SECTION -->
  <div class="site-wrap">

    <!-- MOBILE NAV BAR -->
    <div class="site-mobile-menu blu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <!-- NAV BAR -->
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
                <input class="btn btn-light rouund" type="button" value="Login" onclick="window.location.href='login.php'">
              </ul>
            </nav>
          </div>



        </div>
      </div>
    </div>
  </div>

  <!-- IMAGE HEADER -->
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(assets/images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"">
    <div class=" container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">Registration</h1>
      </div>
    </div>
  </div>
  </div>

  <!-- REGISTRATION SECTION -->
  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-12 col-lg-8 mb-5">
          <form action="./scripts/regisvalid.php" method="POST" class="p-5">
            <h1>User Information</h1>
            <p class="m-0">Please fill out the following fields.</p>


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
                <input class="form-control 
                <?php if (isset($firstname_error)) {
                  echo "is-invalid";
                } ?>" type="text" name="firstname" value="<?php echo $_SESSION['firstname']; ?>"></div>
              <div class="form-group col-md-6"><label>Last Name</label><input class="form-control 
              <?php if (isset($lastname_error)) {
                echo "is-invalid";
              } ?>" type="text" name="lastname" value="<?php echo $_SESSION['lastname'] ?>"></div>
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
                  </div><input class="form-control 
                  <?php if (isset($username_error)) {
                    echo "is-invalid";
                  } ?>" type="text" name="username" value="<?php echo $_SESSION['username'] ?>">
                  <div class="input-group-append"></div>
                </div>
              </div>
              <div class="form-group col-md-6"><label>Email Address</label><input class="form-control 
              <?php if (isset($email_error)) {
                echo "is-invalid";
              } ?>" type="text" name="email" value="<?php echo $_SESSION['email'] ?>"></div>
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
                    } ?>" type="text" name="areacode" value="<?php echo $_SESSION['areacode'] ?>">
                    <div class="input-group-append"></div>
                  </div>
                </div>
                <div class="col col-md-7"><input class="form-control 
                <?php if (isset($phonenumber_error)) {
                  echo "is-invalid";
                } ?>" type="text" name="phonenumber" value="<?php echo $_SESSION['phonenumber'] ?>"></div>
              </div>
            </div>


            <!--- PASSWORDS SECTION --->

            <?php if (isset($password_error)) {
              echo $password_error;
            } ?>
            <?php if (isset($passwordconfirm_error)) {
              echo $passwordconfirm_error;
            } ?>
            <?php if (isset($notmatching_error)) {
              echo $notmatching_error;
            } ?>


            <div class="form-group"><label>Password</label><input class="form-control 
            <?php if (isset($password_error)) {
              echo "is-invalid";
            } ?>" type="password" name="password" value="<?php echo $_SESSION['password'] ?>"></div>
            <div class="form-group"><label>Confirm Password</label><input class="form-control 
            <?php if (isset($passwordconfirm_error)) {
              echo "is-invalid";
            } ?>" type="password" name="passwordconfirm" value="<?php echo $_SESSION['passwordconfirm'] ?>"></div>


            <!--- CONTINUE BUTTON --->
            <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="register" value="Sign Up"></input>
          </form>
        </div>

        <div class="col-lg-4" hidden>
          <div class="p-4 mb-3">
            <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">237 Old Hoope Rd, Kingston 6, JM</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">876-123-1562</a></p>

            <p class="mb-0 font-weight-bold">Email</p>
            <p class="mb-0"><a href="#">Scammadem_dehyaah@gmail.com</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>


</body>

</html>