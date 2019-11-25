<?php

session_start();

include '../database/db_connection.php';

$query = "DELETE FROM `property` WHERE PropertyID='" . $_GET['propID'] . "' AND userID='" . $_SESSION['currentUserID'] . "';"; // To Display the Property Info
$result = mysqli_query($conn, $query) or die("Failed to get data.");

if (mysqli_num_rows($result) == 0) {
    // Redirect to Success Page
    $_SESSION['redirect']['header'] = 'SUCCESS';
    $_SESSION['redirect']['path'] = 'user-dashboard.php';
    $_SESSION['redirect']['message'] = 'Property Deleted.';
    header('Location: ../error-or-success.php');
} else {
    // Redirect to Error Page
    $_SESSION['redirect']['header'] = 'ERROR';
    $_SESSION['redirect']['path'] = 'user-dashboard.php';
    $_SESSION['redirect']['message'] = 'It seems you attempted something you\'re not allowed access to.';
    header('Location: ../error-or-success.php');
}
