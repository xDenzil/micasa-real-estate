<?php


session_start();
$RegID = $_GET['RegID'];


include '../database/db_connection.php'; // Connect to Database
$RegID = $_REQUEST['RegID'];
$query = "DELETE FROM register WHERE RegID = $RegID;";
$result = mysqli_query($conn, $query) or die("<h1>Could not execute query.</h1>");

//Redirect if Successful
$_SESSION['redirect']['header'] = 'SUCCESS';
$_SESSION['redirect']['path'] = 'adminmenu.php';
$_SESSION['redirect']['message'] = 'User Account Deleted.';
header('Location: ../error-or-success.php');
