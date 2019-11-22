<?php

session_start();

if (isset($_POST['login'])) {
    $_SESSION['username_try'] = $_POST['username_try'];
    $usernametry =  $_SESSION['username_try'];
    $password_try = $_POST['password_try']; //Not Saving Password In Session


    include '../database/db_connection.php';
    $query = "SELECT * FROM `register` WHERE Username='$usernametry' AND Password='$password_try';";
    $result = mysqli_query($conn, $query) or die("Failed to get data.");


    if (mysqli_num_rows($result) != 0) {
        header("Location: ../user-dashboard.php");
        $_SESSION['login_error'] = null; //If a result was returned
        $_SESSION['username_try'] = null;
    } else {
        $_SESSION['login_error'] = '<p class="error small-text">Incorrect username / password.</p>';
        header("Location: ../login.php"); // If a result was not returned
    }
}
