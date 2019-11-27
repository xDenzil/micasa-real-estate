<?php

session_start();

$_SESSION['errFlagEditProperty'] == false;

foreach ($_POST as $key => $value) {
    $$key = $value;
    $_SESSION[$key] = $value;
}


// ADDRESS LINE 1 VALIDATION
if (empty($_POST['address1'])) {
    $_SESSION['address1'] = null;
    $_SESSION['address1_error'] = "<span class='error small-text'>* Please enter your address. </span>";
    $_SESSION['errFlag9'] = true;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['address1'])) {
    $_SESSION['address1_error'] = "<span class='error small-text'>* Invalid address.</span>";
    $_SESSION['address1'] = $_POST['address1'];
    $_SESSION['errFlag9'] = true;
} else {
    $_SESSION['address1'] = $_POST['address1'];
    $_SESSION['address1_error'] = null;
    $_SESSION['errFlag9'] = false;
}
// CITY VALIDATION
if (empty($_POST['city'])) {
    $_SESSION['city'] = null;
    $_SESSION['city_error'] = "<span class='error small-text'>* Please enter your city. </span>";
    $_SESSION['errFlag10'] = true;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['city'])) {
    $_SESSION['city_error'] = "<span class='error small-text'>* Invalid city. </span>";
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['errFlag10'] = true;
} else {
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['city_error'] = null;
    $_SESSION['errFlag10'] = false;
}


// ADDRESS LINE 2 VALIDATION
if (empty($_POST['address2'])) {
    $_SESSION['address2'] = null;
    $_SESSION['errFlag11'] = false;
    $_SESSION['address2_error'] = null;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['address2'])) {
    $_SESSION['address2_error'] = "<span class='error small-text'>* Invalid address.</span>";
    $_SESSION['address2'] = $_POST['address2'];
    $_SESSION['errFlag11'] = true;
} else {
    $_SESSION['address2'] = $_POST['address2'];
    $_SESSION['address2_error'] = null;
    $_SESSION['errFlag11'] = false;
}



//PARISH VALIDATION
if (empty($_POST['parish'])) {
    $_SESSION['parish'] = null;
    $_SESSION['parish_error'] = "<span class='error small-text'>* Please select your parish. </span>";
    $_SESSION['errFlag12'] = true;
} else {
    $_SESSION['parish'] = $_POST['parish'];
    $_SESSION['parish_error'] = null;
    $_SESSION['errFlag12'] = false;
}


//PROPERTY TYPE VALIDATION
if (empty($_POST['property_type'])) {
    $_SESSION['property_type'] = null;
    $_SESSION['property_type_error'] = "<span class='error small-text'>* Please select the property type. </span>";
    $_SESSION['errFlag13'] = true;
} else {
    $_SESSION['property_type'] = $_POST['property_type'];
    $_SESSION['property_type_error'] = null;
    $_SESSION['errFlag13'] = false;
}


//LAND SIZE VALIDATION
if (empty($_POST['landsize'])) {
    $_SESSION['landsize_error'] = "<span class='error small-text'>* Please enter land size. </span>";
    $_SESSION['landsize'] = null;
    $_SESSION['errFlag14'] = true;
} else if (!preg_match("/^\d+\.?\d*$/", $_POST['landsize'])) {
    $_SESSION['landsize_error'] = "<span class='error small-text'>* Land size is invalid. </span>";
    $_SESSION['landsize'] = $_POST['landsize'];
    $_SESSION['errFlag14'] = true;
} else {
    $_SESSION['landsize'] = $_POST['landsize'];
    $_SESSION['landsize_error'] = null;
    $_SESSION['errFlag14'] = false;
}


//BUILDING TYPE VALIDATION
if (empty($_POST['building_type'])) {
    $_SESSION['building_type'] = null;
    $_SESSION['building_type_error'] = "<span class='error small-text'>* Please select the building type. </span>";
    $_SESSION['errFlag15'] = true;
} else {
    $_SESSION['building_type'] = $_POST['building_type'];
    $_SESSION['building_type_error'] = null;
    $_SESSION['errFlag15'] = false;
}

//BEDROOMS VALIDATION
if ($_POST['bedrooms'] == 0) {
    $_SESSION['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['bedrooms_error'] = null;
    $_SESSION['errFlag16'] = false;
} else if (empty($_POST['bedrooms'])) {
    $_SESSION['bedrooms_error'] = "<span class='error small-text'>* Please enter number of bedrooms. </span>";
    $_SESSION['bedrooms'] = null;
    $_SESSION['errFlag16'] = true;
} else if (!preg_match("/^[0-9]/", $_POST['bedrooms'])) {
    $_SESSION['bedrooms_error'] = "<span class='error small-text'>* Bedroom number is invalid. </span>";
    $_SESSION['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['errFlag16'] = true;
} else {
    $_SESSION['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['bedrooms_error'] = null;
    $_SESSION['errFlag16'] = false;
}

//BATHROOMS VALIDATION
if ($_POST['bathrooms'] == 0) {
    $_SESSION['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['bathrooms_error'] = null;
    $_SESSION['errFlag17'] = false;
} else if (empty($_POST['bathrooms'])) {
    $_SESSION['bathrooms_error'] = "<span class='error small-text'>* Please enter number of bathrooms. </span>";
    $_SESSION['bathrooms'] = null;
    $_SESSION['errFlag17'] = true;
} else if (!preg_match("/^[0-9]/", $_POST['bathrooms'])) {
    $_SESSION['bathrooms_error'] = "<span class='error small-text'>* Bathroom number is invalid. </span>";
    $_SESSION['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['errFlag17'] = true;
} else {
    $_SESSION['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['bathrooms_error'] = null;
    $_SESSION['errFlag17'] = false;
}


//LISTING TYPE VALIDATION
if (empty($_POST['listing_type'])) {
    $_SESSION['listing_type'] = null;
    $_SESSION['listing_type_error'] = "<span class='error small-text'>* Please select the listing type. </span>";
    $_SESSION['errFlag18'] = true;
} else {
    $_SESSION['listing_type'] = $_POST['listing_type'];
    $_SESSION['listing_type_error'] = null;
    $_SESSION['errFlag18'] = false;
}


//PRICE VALIDATION
if (empty($_POST['price'])) {
    $_SESSION['price_error'] = "<span class='error small-text'>* Please enter price. </span>";
    $_SESSION['price'] = null;
    $_SESSION['errFlag19'] = true;
} else if (!preg_match("/^\d+\.?\d*$/", $_POST['price'])) {
    $_SESSION['price_error'] = "<span class='error small-text'>* Price is invalid. </span>";
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['errFlag19'] = true;
} else {
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['price_error'] = null;
    $_SESSION['errFlag19'] = false;
}




if (($_SESSION['errFlag9'] == true) || ($_SESSION['errFlag10'] == true) || ($_SESSION['errFlag11'] == true) || ($_SESSION['errFlag12'] == true) || ($_SESSION['errFlag13'] == true) || ($_SESSION['errFlag14'] == true) || ($_SESSION['errFlag15'] == true) || ($_SESSION['errFlag16'] == true) || ($_SESSION['errFlag17'] == true) || ($_SESSION['errFlag18'] == true) || ($_SESSION['errFlag19'] == true)
) {
    $_SESSION['errFlagEditProperty'] = true;
} else {
    $_SESSION['errFlagEditProperty'] = false;
}
