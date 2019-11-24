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
        while ($row = mysqli_fetch_assoc($result)) {
            header("Location: ../user-dashboard.php");
            $_SESSION['currentUserID'] = $row['RegID']; // Keep track of who the logged in user is at all times
            $_SESSION['login_error'] = null; // If a result was returned, reset login error in case it was set previously
            $_SESSION['username_try'] = null; // If a result was returned, reset username try because the user got logged in so this variable is no longer needed
            $_SESSION['userLevel'] = 'user'; // Set permissions to user so that different navigation links are displayed

            // REDIRECT TO SUCCESS PAGE
            $_SESSION['redirect']['header'] = 'LOGIN SUCCESS';
            $_SESSION['redirect']['path'] = 'user-dashboard.php';
            $_SESSION['redirect']['message'] = 'Welcome' . " " . $row['FirstName'] . " " . $row['LastName'];
            header('Location: ../error-or-success.php');
        }
    } else {
        $_SESSION['login_error'] = '<p class="error small-text">Incorrect username / password.</p>'; // Error message output if login fails
        header("Location: ../login.php"); // If a result was not returned go back to the login page
    }
}
