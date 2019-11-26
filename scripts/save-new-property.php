<?php

session_start();

// Pass Data from the session into variables to be sent into the SQL query
$userID = $_SESSION['currentUserID'];
$address1 = $_SESSION['add-new']['address1'];
$address2 = $_SESSION['add-new']['address2'];
$city = $_SESSION['add-new']['city'];
$parish = $_SESSION['add-new']['parish'];
$size = $_SESSION['add-new']['landsize'];
$listingType = $_SESSION['add-new']['listing_type'];
$propertyType = $_SESSION['add-new']['property_type'];
$buildingType =  $_SESSION['add-new']['building_type'];
$bedroom =  $_SESSION['add-new']['bedrooms'];
$bathroom = $_SESSION['add-new']['bathrooms'];
$price = $_SESSION['add-new']['price'];
$previewImgUrl = $_SESSION['add-new']['preview_img'];


//Connect to DB & Run Query
include '../database/db_connection.php';
$sql = "INSERT INTO `property`(`userID`, `Address1`, `Address2`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES ($userID,'$address1','$address2','$city','$parish',$size,'$listingType','$propertyType','$buildingType',$bedroom,$bathroom,$price,'$previewImgUrl');";
$result = mysqli_query($conn, $sql) or die("Failed to get data");
header('Location: ../user-dashboard.php');


if (mysqli_num_rows($result) == 0) {
    // Redirect to Success Page
    $_SESSION['add-new'] = null; // Clear session variables for adding property and images
    $_SESSION['redirect']['header'] = 'SUCCESS';
    $_SESSION['redirect']['path'] = 'user-dashboard.php';
    $_SESSION['redirect']['message'] = 'Property Added.';
    header('Location: ../error-or-success.php');

    // WRITE FILES

    $myfile = fopen("../files/properties.txt", "a");
    $txt = "USER: " . $userID . " | ADDRESS 1: " . $address1 . " | ADDRESS2: " . $address2 . " | CITY: " . $city . " | PARISH: " . $parish . " | LAND SIZE: " . $size . " | LISTING TYPE: " . $listingType . " | PROPERTY TYPE: " . $propertyType . " | BUILDING TYPE: " . $buildingType . " | BEDROOMS: " . $bedroom . " | BATHROOMS: " . $bathroom . " | PRICE: " . $price . "\n\n";
    fwrite($myfile, $txt);
    fclose($myfile);
} else {
    // Redirect to Error Page
    $_SESSION['redirect']['header'] = 'ERROR';
    $_SESSION['redirect']['path'] = 'user-dashboard.php';
    $_SESSION['redirect']['message'] = 'Adding Property failed.';
    header('Location: ../error-or-success.php');
}
