<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['errFlagEditProperty'] == false;


foreach ($_POST as $key => $value) {
    $$key = $value;
    $_SESSION[$key] = $value;
}


// ADDRESS LINE 1 VALIDATION
if (empty($_POST['address1'])) {
    $_SESSION['prop']['address1'] = null;
    $_SESSION['address1_error'] = "<span class='error small-text'>* Please enter your address. </span>";
    $_SESSION['errFlag9'] = true;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['address1'])) {
    $_SESSION['address1_error'] = "<span class='error small-text'>* Invalid address.</span>";
    $_SESSION['prop']['address1'] = $_POST['address1'];
    $_SESSION['errFlag9'] = true;
} else {
    $_SESSION['prop']['address1'] = $_POST['address1'];
    $_SESSION['address1_error'] = null;
    $_SESSION['errFlag9'] = false;
}
// CITY VALIDATION
if (empty($_POST['city'])) {
    $_SESSION['prop']['city'] = null;
    $_SESSION['city_error'] = "<span class='error small-text'>* Please enter your city. </span>";
    $_SESSION['errFlag10'] = true;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['city'])) {
    $_SESSION['city_error'] = "<span class='error small-text'>* Invalid city. </span>";
    $_SESSION['prop']['city'] = $_POST['city'];
    $_SESSION['errFlag10'] = true;
} else {
    $_SESSION['prop']['city'] = $_POST['city'];
    $_SESSION['city_error'] = null;
    $_SESSION['errFlag10'] = false;
}


// ADDRESS LINE 2 VALIDATION
if (empty($_POST['address2'])) {
    $_SESSION['prop']['address2'] = null;
    $_SESSION['errFlag11'] = false;
    $_SESSION['address2_error'] = null;
} else if (!preg_match("/^[a-zA-Z0-9 ]{3,}$/", $_POST['address2'])) {
    $_SESSION['address2_error'] = "<span class='error small-text'>* Invalid address.</span>";
    $_SESSION['prop']['address2'] = $_POST['address2'];
    $_SESSION['errFlag11'] = true;
} else {
    $_SESSION['prop']['address2'] = $_POST['address2'];
    $_SESSION['address2_error'] = null;
    $_SESSION['errFlag11'] = false;
}



//PARISH VALIDATION
if (empty($_POST['parish'])) {
    $_SESSION['prop']['parish'] = null;
    $_SESSION['parish_error'] = "<span class='error small-text'>* Please select your parish. </span>";
    $_SESSION['errFlag12'] = true;
} else {
    $_SESSION['prop']['parish'] = $_POST['parish'];
    $_SESSION['parish_error'] = null;
    $_SESSION['errFlag12'] = false;
}


//PROPERTY TYPE VALIDATION
if (empty($_POST['property_type'])) {
    $_SESSION['prop']['property_type'] = null;
    $_SESSION['property_type_error'] = "<span class='error small-text'>* Please select the property type. </span>";
    $_SESSION['errFlag13'] = true;
} else {
    $_SESSION['prop']['property_type'] = $_POST['property_type'];
    $_SESSION['property_type_error'] = null;
    $_SESSION['errFlag13'] = false;
}


//LAND SIZE VALIDATION
if (empty($_POST['landsize'])) {
    $_SESSION['landsize_error'] = "<span class='error small-text'>* Please enter land size. </span>";
    $_SESSION['prop']['landsize'] = null;
    $_SESSION['errFlag14'] = true;
} else if (!preg_match("/^\d+\.?\d*$/", $_POST['landsize'])) {
    $_SESSION['landsize_error'] = "<span class='error small-text'>* Land size is invalid. </span>";
    $_SESSION['prop']['landsize'] = $_POST['landsize'];
    $_SESSION['errFlag14'] = true;
} else {
    $_SESSION['prop']['landsize'] = $_POST['landsize'];
    $_SESSION['landsize_error'] = null;
    $_SESSION['errFlag14'] = false;
}


//BUILDING TYPE VALIDATION
if (empty($_POST['building_type'])) {
    $_SESSION['prop']['building_type'] = null;
    $_SESSION['building_type_error'] = "<span class='error small-text'>* Please select the building type. </span>";
    $_SESSION['errFlag15'] = true;
} else {
    $_SESSION['prop']['building_type'] = $_POST['building_type'];
    $_SESSION['building_type_error'] = null;
    $_SESSION['errFlag15'] = false;
}

//BEDROOMS VALIDATION
if ($_POST['bedrooms'] == 0) {
    $_SESSION['prop']['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['bedrooms_error'] = null;
    $_SESSION['errFlag16'] = false;
} else if (empty($_POST['bedrooms'])) {
    $_SESSION['bedrooms_error'] = "<span class='error small-text'>* Please enter number of bedrooms. </span>";
    $_SESSION['prop']['bedrooms'] = null;
    $_SESSION['errFlag16'] = true;
} else if (!preg_match("/^[0-9]/", $_POST['bedrooms'])) {
    $_SESSION['bedrooms_error'] = "<span class='error small-text'>* Bedroom number is invalid. </span>";
    $_SESSION['prop']['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['errFlag16'] = true;
} else {
    $_SESSION['prop']['bedrooms'] = $_POST['bedrooms'];
    $_SESSION['bedrooms_error'] = null;
    $_SESSION['errFlag16'] = false;
}

//BATHROOMS VALIDATION
if ($_POST['bathrooms'] == 0) {
    $_SESSION['prop']['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['bathrooms_error'] = null;
    $_SESSION['errFlag17'] = false;
} else if (empty($_POST['bathrooms'])) {
    $_SESSION['bathrooms_error'] = "<span class='error small-text'>* Please enter number of bathrooms. </span>";
    $_SESSION['prop']['bathrooms'] = null;
    $_SESSION['errFlag17'] = true;
} else if (!preg_match("/^[0-9]/", $_POST['bathrooms'])) {
    $_SESSION['bathrooms_error'] = "<span class='error small-text'>* Bathroom number is invalid. </span>";
    $_SESSION['prop']['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['errFlag17'] = true;
} else {
    $_SESSION['prop']['bathrooms'] = $_POST['bathrooms'];
    $_SESSION['bathrooms_error'] = null;
    $_SESSION['errFlag17'] = false;
}


//LISTING TYPE VALIDATION
if (empty($_POST['listing_type'])) {
    $_SESSION['prop']['listing_type'] = null;
    $_SESSION['listing_type_error'] = "<span class='error small-text'>* Please select the listing type. </span>";
    $_SESSION['errFlag18'] = true;
} else {
    $_SESSION['prop']['listing_type'] = $_POST['listing_type'];
    $_SESSION['listing_type_error'] = null;
    $_SESSION['errFlag18'] = false;
}


//PRICE VALIDATION
if (empty($_POST['price'])) {
    $_SESSION['price_error'] = "<span class='error small-text'>* Please enter price. </span>";
    $_SESSION['prop']['price'] = null;
    $_SESSION['errFlag19'] = true;
} else if (!preg_match("/^\d+\.?\d*$/", $_POST['price'])) {
    $_SESSION['price_error'] = "<span class='error small-text'>* Price is invalid. </span>";
    $_SESSION['prop']['price'] = $_POST['price'];
    $_SESSION['errFlag19'] = true;
} else {
    $_SESSION['prop']['price'] = $_POST['price'];
    $_SESSION['price_error'] = null;
    $_SESSION['errFlag19'] = false;
}


// IMAGES


$_SESSION['prop']['gallery-status'] = '';
$_SESSION['prop']['countfiles'] = count($_FILES['gallery']['name']);

if ($_FILES['gallery']['name'][0] == '') { // IF no gallery images uploaded
    $_SESSION['prop']['countfiles'] = 0;
}

if ($_SESSION['prop']['countfiles'] != 0) { // IF GALLERY WAS UPLOADED
    for ($i = 0; $i < $_SESSION['prop']['countfiles']; $i++) {
        $fileName = $_FILES['gallery']['name'][$i];
        $fileType = $_FILES['gallery']['type'][$i];
        $fileSize = $_FILES['gallery']['size'][$i];
        $fileError = $_FILES['preview_img']['error'][$i];

        $fileExtension = explode(".", $fileName);
        $fileActualExtension = strtolower(end($fileExtension));



        $allowedFileTypes = array('jpg', 'jpeg', 'png');
        if ($fileError == 0) {
            if (in_array($fileActualExtension, $allowedFileTypes)) {
                if ($fileSize < 5000000) {
                    $_SESSION['prop']['gallery-status'][$i] = 'good';
                    $_SESSION['prop']['gallery_images_saved'][$i] = $_FILES['gallery']['name'][$i];
                } else {
                    $_SESSION['prop']['gallery-status'][$i] = 'bad';
                    $_SESSION['prop']['gallery_img_error'] = "<span class='error small-text'>A file exceeding 5MB was found.</span>";
                }
            } else {
                $_SESSION['prop']['gallery-status'][$i] = 'bad';
                $_SESSION['prop']['gallery_img_error'] = "<span class='error small-text'>An unsupported filetype was found, try again.</span>";
            }
        } else {
            $_SESSION['prop']['gallery-status'][$i] = 'bad';
            $_SESSION['prop']['gallery_img_error'] = "<span class='error small-text'>An unexcpected error occured in one of the files, try again.</span>";
        }
    }

    if (in_array('bad', $_SESSION['prop']['gallery-status'])) {
        $_SESSION['errFlag20'] = true;
    } else {
        for ($i = 0; $i < $_SESSION['prop']['countfiles']; $i++) {
            $_SESSION['prop']['ok'] = 'yes';
            $_SESSION['prop']['gallery_img_error'] = null;
            $_SESSION['errFlag20'] = false;
        }
    }
} else { // IF GALLERY WAS NOT UPLOADED
    $_SESSION['prop']['ok'] = 'yes';
    $_SESSION['prop']['gallery_images_saved'] = null;
    echo 'no gallery uploaded';
}




// IMAGE UPLOAD VALIDATION
if (empty($_FILES['preview_img_up']['name'])) {
    $_SESSION['errFlag21'] = false;
    $_SESSION['prop']['preview_img_error'] = null;

    if ($_SESSION['prop']['countfiles'] != 0) {
        for ($z = 0; $z < $_SESSION['prop']['countfiles']; $z++) {
            copy($_FILES['gallery']['tmp_name'][$z], 'uploads/' . $_FILES['gallery']['name'][$z]);
        }
    }
} else {
    $file = $_FILES['preview_img_up'];
    $fileName = $_FILES['preview_img_up']['name']; // eg. 'myfile.jpg'
    $fileSize = $_FILES['preview_img_up']['size']; // eg. 500000 - this is in Bytes
    $fileType = $_FILES['preview_img_up']['type']; // eg. 'image/jpeg'
    $fileError = $_FILES['preview_img_up']['error']; // will be 0 if there is no error
    $fileTempLocation = $_FILES['preview_img_up']['tmp_name']; // temporary location of file on user's computer
    $fileExtension = explode(".", $fileName); // Split file name into two, seprated by the '.' so 'myfile.jpg' becomes 'myfile' and 'jpg'
    $fileActualExtension = strtolower(end($fileExtension)); // 'end' function returns the second half of the split results. So 'jpg' in this case.

    $allowedFileTypes = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtension, $allowedFileTypes)) { // If extension is inside the allowed file types array
        if ($fileError == 0) {
            if ($fileSize < 5000000) {
                if ($_SESSION['prop']['ok'] == 'yes') {

                    $fileDestination = "uploads/" . $fileName;
                    copy($fileTempLocation, $fileDestination); // Move file from temp location on user machine to the new location on web 
                    $_SESSION['prop']['preview_img_up'] = $fileName; // Saving URL in the session to be sent to the Database later
                    $_SESSION['prop']['preview_img_error'] = null; // Reset error session variable if it was previously set

                    for ($z = 0; $z < $_SESSION['prop']['countfiles']; $z++) {
                        copy($_FILES['gallery']['tmp_name'][$z], 'uploads/' . $_FILES['gallery']['name'][$z]);
                    }

                    $_SESSION['errFlag21'] = false;

                    //header('Location: save-new-property.php');
                } else {
                    echo 'gallery not good but preview good';
                }
            } else {
                unset($_SESSION['prop']['preview_img_up']);
                $_SESSION['errFlag21'] = true;
                $_SESSION['prop']['preview_img_error'] = "<span class='error small-text'>* File size too large Must be less than 5mb.</span>";
            }
        } else {
            unset($_SESSION['prop']['preview_img_up']);
            $_SESSION['errFlag21'] = true;
            $_SESSION['prop']['preview_img_error'] = "<span class='error small-text'>* There was an error uploading this file.</span>";
        }
    } else {
        unset($_SESSION['prop']['preview_img_up']);
        $_SESSION['errFlag21'] = true;
        $_SESSION['prop']['preview_img_error'] = "<span class='error small-text'>* Nothing was selected OR Unsupported file type.</span>";
    }
}








if (($_SESSION['errFlag9'] == true) || ($_SESSION['errFlag10'] == true) || ($_SESSION['errFlag11'] == true) || ($_SESSION['errFlag12'] == true) || ($_SESSION['errFlag13'] == true) || ($_SESSION['errFlag14'] == true) || ($_SESSION['errFlag15'] == true) || ($_SESSION['errFlag16'] == true) || ($_SESSION['errFlag17'] == true) || ($_SESSION['errFlag18'] == true) || ($_SESSION['errFlag19'] == true) || ($_SESSION['errFlag20'] == true) || ($_SESSION['errFlag21'] == true)
) {
    $_SESSION['errFlagEditProperty'] = true;
} else {
    $_SESSION['errFlagEditProperty'] = false;
}
