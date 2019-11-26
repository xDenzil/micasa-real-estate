<?php
session_start();
include './database/db_connection.php'; // Connect to Database
$RegID = $_REQUEST['RegID'];
$query = "DELETE FROM register WHERE RegID = $RegID";
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");
header("Location: ../adminmenu.php");

/*include './database/db_connection.php'; // Connect to Database

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['RegID']) && is_numeric($_GET['RegID']))
{

    $RegID = $_GET['RegID'];// get id value
    // delete the entry
    $result = mysqli_query("DELETE FROM register WHERE RegID=$RegID")or die("<h1>Could not connect to database.</h1>");
    header("Location: Adminmenu.php");

}

else
// if id isn't set, or isn't valid, redirect back to view page
{
    header("Location: Adminmenu.php");

}*/
?>
