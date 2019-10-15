<?php
$properties;
$building;
$listing;	
$size;
$bedrooms;
$bathrooms;
$price;

if(isset($_POST["properties"])){
    $properties = $_POST["properties"];	
}

if(isset($_POST["building"])){
    $building = $_POST["building"];	
}

if(isset($_POST["listing"])){
    $listing = $_POST["listing"];
}
if(isset($_POST["size"])){
    $size = $_POST["size"];
}
if(isset($_POST["bedrooms"])){
    $bedrooms = $_POST["bedrooms"];
}
if(isset($_POST["bathrooms"])){
    $bathrooms = $_POST["bathrooms"];
}
if(isset($_POST["size"])){
    $price = $_POST["price"];
}

$err = 0;

if($properties == null) $err++;

if($building == null) $err++;

if($listing == null)$err++;

if($size == null)$err++;

if($bedrooms == null)$err++;

if($bathrooms == null)$err++;

if($price == null)$err++;
    
    
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['properties'] =  $properties;
$_SESSION['building'] =  $building ;
$_SESSION['listing'] =  $listing ;
$_SESSION['size'] =  $size;
$_SESSION['bedrooms'] =  $bedrooms;
$_SESSION['bathrooms'] =  $bathrooms;
$_SESSION['price'] =  $price;

if($err>0) header('Location: description.php');
else{ 
    $_SESSION['active'] = true;
    header('Location: registerproperty.php');
}
?>



