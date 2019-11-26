<?php

session_start();

include '../database/db_connection.php';
if ($_SESSION['userLevel'] == 'user') {
    $query = "DELETE FROM `property` WHERE PropertyID='" . $_GET['propID'] . "' AND userID='" . $_SESSION['currentUserID'] . "';";
} else if ($_SESSION['userLevel'] == 'admin') {
    $query = "DELETE FROM `property` WHERE PropertyID=" . $_GET['propID'] . ";";
} // To Display the Property Info
$result = mysqli_query($conn, $query) or die("Failed to get data.");

// Redirect to Success Page
if ($_SESSION['userLevel'] == 'user') {
    $_SESSION['redirect']['path'] = 'user-dashboard.php';
} else if ($_SESSION['userLevel'] == 'admin') {
    $_SESSION['redirect']['path'] = 'adminmenu.php';
}
$_SESSION['redirect']['header'] = 'SUCCESS';
$_SESSION['redirect']['message'] = 'Property Deleted.';
header('Location: ../error-or-success.php');
