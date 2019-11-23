<?php

session_start();

// Pass Data from all the sessions into variable to be sent into the SQL query
$userID = $_SESSION['currentUserID'];
$address1 = $_SESSION['address1'];
$address2 = $_SESSION['address2'];
$city = $_SESSION['city'];
$parish = $_SESSION['parish'];
$size = $_SESSION['landsize'];
$listingType = $_SESSION['listing_type'];
$propertyType = $_SESSION['property_type'];
$buildingType =  $_SESSION['building_type'];
$bedroom =  $_SESSION['bedrooms'];
$bathroom = $_SESSION['bathrooms'];
$price = $_SESSION['price'];
$previewImgUrl = $_SESSION['preview_img'];

// Connect to DB & Run Query
include '../database/db_connection.php';
$sql = "INSERT INTO `property`(`userID`, `Address1`, `Address2`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES ($userID,'$address1','$address2','$city','$parish','$size','$listingType','$propertyType','$buildingType','$bedroom','$bathroom','$price','$previewImgUrl');";
$result = mysqli_query($conn, $sql) or die("Failed to get data");
header('Location: ../user-dashboard.php');


// Clear session variables when done, not needed anymore
$_SESSION['address1'] = null;
$_SESSION['address2'] = null;
$_SESSION['city'] = null;
$_SESSION['parish'] = null;
$_SESSION['landsize'] = null;
$_SESSION['listing_type'] = null;
$_SESSION['property_type'] = null;
$_SESSION['building_type'] = null;
$_SESSION['bedrooms'] = null;
$_SESSION['bathrooms'] = null;
$_SESSION['price'] = null;
$_SESSION['preview_img'] = null;
