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


  <div class="site-loader"></div>
  <div class="site-wrap"></div>

  <div class="site-navbar mt-4">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-2  col-md-4 col-lg-2 col-sm-8">
          <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Mi Casa<span class="text-danger">.</span></strong></a></h1>
        </div>
        <div class="col-10  col-md-8 col-lg-10 col-sm-4">
          <nav class="site-navigation text-right text-md-right" role="navigation">

            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="nav-item">
                <a class="nav-link text-white" href="all-properties.php">All Properties</a>
              </li>
              <li class="has-children active">
                    <a href="properties.html">Administrator Menu</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="registration.php">Add User</a></li>
                      <li class="has-children">
                        <a href="#">Property Menu</a>
                        <ul class="dropdown">
                          <li><a href="location.php">Add Property</a></li>
                          <
                        </ul>
                      </li>
                    </ul>
                  </li>
              <input class="btn btn-primary rouund" type="button" value="Logout" onclick="window.location.href='logout.php'">
              
            </ul>
          </nav>
        </div>

      </div>
    </div>
  </div>
  </div>

  <div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay" style="background-image: url(images/bg-def2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">ADMINISTRATOR</span>
          </div>
        </div>
      </div>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">ADMINISTRATOR</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- Toogle form to delete user Account or Delete Property --->
 
  <div class="site-section p-5 bg-light">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-8 text-center">
          <div class="site-section-title">
            <br>
            <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Delete User
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <p>Please enter User's ID you want to remove:</p>
      <input class="form-control mr-sm-2"  type="search" placeholder="Search User" aria-label="Search">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Delete Property
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <p>Please enter the Property ID you want to remove:</p>
      <input class="form-control mr-sm-2"  type="search2" placeholder="Search Property" aria-label="Search">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Edit User   
      </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <p>Please enter User's ID you want to edit:</p>
      <input class="form-control mr-sm-2"  type="search3" placeholder="Search User" aria-label="Search">
    </div>
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Edit Property   
      </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      <p>Please enter Property ID you want to edit:</p>
      <input class="form-control mr-sm-2"  type="search4" placeholder="Search" aria-label="Search">
    </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section p-5 blu text-white">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-house text-white"></span>
          <h2 class="service-heading text-white">Guaranteed Research </h2>
          <p class="text-white">Our experts find the best properties in Jamaica by conducting research on each location.</p>

        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-sold text-white"></span>
          <h2 class="service-heading text-white">Sold Houses</h2>
          <p class="text-white">We have sold more houses, lots and office/business space than you can count.</p>

        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-camera text-white"></span>
          <h2 class="service-heading text-white">Secure Transactions</h2>
          <p class="text-white">We are the bridge between you owning that lot, that new house on the block or that new office space</p>
        </a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
</script> 
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