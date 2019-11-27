<?php
session_start();
include './database/db_connection.php';

// get results from database
$query = "SELECT * FROM register WHERE RegID <> '" . $_SESSION['currentUserID'] . "'ORDER BY RegID desc;";
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");


$query2 = "SELECT * FROM property;";
$result2 = mysqli_query($conn, $query2) or die("<h1>Could not connect to database.</h1>");

if ($_SESSION['userLevel'] != 'admin') {
    $_SESSION['redirect']['path'] = 'index.php';
    $_SESSION['redirect']['header'] = 'Woops';
    $_SESSION['redirect']['message'] = 'Sorry, but you don\'t have access to this page.';
    header('Location: error-or-success.php');
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

        <div class="container bg-white m-5 mx-auto">
            <div class="row">
                <div class="col-3  bg-light p-0">
                    <div class="col p-5">
                        <h1 class="text-black">Admin</h1>
                        <h1 class="text-black">Panel</h1>
                    </div>
                    <div class="col  p-5">
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
                                            <table class="table table-borderless table-responsive">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">RegID</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Firstname</th>
                                                        <th scope="col">Lastname</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // loop through results of database query, displaying them in the table
                                                    while ($row = mysqli_fetch_array($result)) { ?>
                                                        <tr>
                                                            <th scope="row" class="pt-4"><?php echo $row['RegID']; ?> </th>
                                                            <th scope="row" class="pt-4"><?php echo $row['Username']; ?></th>
                                                            <td class="pt-4"><?php echo $row['FirstName']; ?></td>
                                                            <td class="pt-4"><?php echo $row['LastName']; ?></td>
                                                            <td class="pt-4"><?php echo $row['Email']; ?></td>

                                                            <td><a class="btn btn-success text-white" role="button" href="edit-user.php?RegID=<?php echo $row['RegID']; ?>">Edit</a></td>
                                                            <td><a class="btn btn-danger" role="button" href="scripts/delete-user.php?RegID=<?php echo $row['RegID']; ?>">Delete</a></td>
                                                        </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                            <p><a href="registration.php">Add a new User</a></p>
                                        </div>


                                    </div>
                                </div>

                                <div class="tab-pane" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="container">

                                        <div class="row">
                                            <!-- Properties -->
                                            <?php

                                            if (mysqli_num_rows($result2) != 0) {
                                                //header('Location: ../property_search.php');
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    echo ' <div class="col-4">
<div class="property-entry"> 
<a href="property-details.php?propID=' . $row2['PropertyID'] . '" class="property-thumbnail">
<div class="offer-type-wrap">
<span class="offer-type bg-primary px-3 p-2">' . $row2['ListingType'] . '</span>
</div>
<img src="uploads/' . $row2['PreviewImageURL'] . '" alt="Image" class="img-fluid">
</a>
<div class="p-4 property-body">
<h2 class="property-title">' . $row2['Address1'] . '</h2>
<span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>' . $row2['City'] . ", " . $row2['Parish'] . '</span>
<strong class="property-price text-primary mb-3 d-block text-dark"> $' . $row2['Price'] . '</strong>
<div class="row">
<div class="col-6"><input class="btn btn-success text-white btn-block" role="button" onclick="window.location.href=\'edit-property.php?propID=' . $row2['PropertyID'] . '\'" name="edit-property" type="submit" value="Edit"></div>
<div class="col-6"><input class="btn btn-danger text-white btn-block" role="button"  onclick="window.location.href=\'scripts/delete-property.php?propID=' . $row2['PropertyID'] . '\'"name="delete-property" type="submit" value="Delete"></div>
</div>
</div>
</div>
</div>';
                                                }
                                                //$_SESSION['search_results'] = $row;
                                            } else {
                                                echo 'Please make a search.';
                                            }
                                            ?>
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