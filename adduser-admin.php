<?php
session_start();
if ((isset($_SESSION['errFlagPage1'])) && ($_SESSION['errFlagPage1']) == true) { //IF SESSION FLAG IS SET AND IS TRUE
  foreach ($_SESSION as $key => $value) { //USE SESSION VARIABLE AS KEY VARIABLE TO ASSIGN VALUES
    $$key = $value;
  }
  
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
  <?php
  switch (isset($_SESSION['userLevel'])) {
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

    <!-- IMAGE HEADER -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(assets/images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"">
    <div class=" container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2">Add New User</h1>
        </div>
      </div>
    </div>
    </div>

    <!-- REGISTRATION SECTION -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 col-lg-8 mb-5">
            <form action="./scripts/adduser-adminvalid.php" method="POST" class="p-5">
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
                } ?>" type="text" name="firstname" value="<?php echo isset($_SESSION['firstname']); ?>"></div>
                <div class="form-group col-md-6"><label>Last Name</label><input class="form-control 
              <?php if (isset($lastname_error)) {
                echo "is-invalid";
              } ?>" type="text" name="lastname" value="<?php echo isset($_SESSION['lastname']); ?>"></div>
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
                  } ?>" type="text" name="username" value="<?php echo isset($_SESSION['username']) ?>">
                    <div class="input-group-append"></div>
                  </div>
                </div>
                <div class="form-group col-md-6"><label>Email Address</label><input class="form-control 
              <?php if (isset($email_error)) {
                echo "is-invalid";
              } ?>" type="text" name="email" value="<?php echo isset($_SESSION['email']) ?>"></div>
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
                    } ?>" type="text" name="areacode" value="<?php echo isset($_SESSION['areacode']) ?>">
                      <div class="input-group-append"></div>
                    </div>
                  </div>
                  <div class="col col-md-7"><input class="form-control 
                <?php if (isset($phonenumber_error)) {
                  echo "is-invalid";
                } ?>" type="text" name="phonenumber" value="<?php echo isset($_SESSION['phonenumber']) ?>"></div>
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
            } ?>" type="password" name="password" value="<?php echo isset($_SESSION['password']) ?>"></div>
              <div class="form-group"><label>Confirm Password</label><input class="form-control 
            <?php if (isset($passwordconfirm_error)) {
              echo "is-invalid";
            } ?>" type="password" name="passwordconfirm" value="<?php echo isset($_SESSION['passwordconfirm']) ?>"></div>


              <!--- CONTINUE BUTTON --->
              <input class="btn btn-primary roundbut col-md-12 mt-4" type="submit" name="adminadd" value="Add User"></input>
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
    <?php include 'blocks/footer.php'; ?>

</body>

</html>



