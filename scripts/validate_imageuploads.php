<?php


/*

Another complex solution but what it does is, it loops through the files sent by the 
user in the gallery input field, validating each, and assigning them to a session variable 
if all pass. The preview image (required image) is then checked, if it is empty or invalid, 
the submit fails and the user is prompted. If it passes validation, then the previously
stored gallery locations are uploaded along with the preview image.

*/


session_start();
if (isset($_POST['add-image'])) {

    $_SESSION['add-new']['gallery-status'] = '';
    $_SESSION['countfiles'] = count($_FILES['gallery']['name']);

    if ($_FILES['gallery']['name'][0] == '') {
        $_SESSION['countfiles'] = 0;
    }

    if ($_SESSION['countfiles'] != 0) { // IF GALLERY WAS UPLOADED
        for ($i = 0; $i < $_SESSION['countfiles']; $i++) {
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
                        $_SESSION['add-new']['gallery-status'][$i] = 'good';
                        $_SESSION['add-new']['gallery_images_saved'][$i] = $_FILES['gallery']['name'][$i];
                    } else {
                        $_SESSION['add-new']['gallery-status'][$i] = 'bad';
                        $_SESSION['add-new']['gallery_img_error'] = "<span class='error small-text'>A file exceeding 5MB was found.</span>";
                    }
                } else {
                    $_SESSION['add-new']['gallery-status'][$i] = 'bad';
                    $_SESSION['add-new']['gallery_img_error'] = "<span class='error small-text'>An unsupported filetype was found, try again.</span>";
                }
            } else {
                $_SESSION['add-new']['gallery-status'][$i] = 'bad';
                $_SESSION['add-new']['gallery_img_error'] = "<span class='error small-text'>An unexcpected error occured in one of the files, try again.</span>";
            }
        }

        if (in_array('bad', $_SESSION['add-new']['gallery-status'])) {
            header("Location: ../add-images.php");
        } else {
            for ($i = 0; $i < $_SESSION['countfiles']; $i++) {
                $_SESSION['add-new']['ok'] = 'yes';
                $_SESSION['add-new']['gallery_img_error'] = null;
            }
        }
    } else { // IF GALLERY WAS NOT UPLOADED
        $_SESSION['add-new']['ok'] = 'yes';
        $_SESSION['add-new']['gallery_images_saved'] = null;
        echo 'no gallery uploaded';
    }




    // IMAGE UPLOAD VALIDATION
    $file = $_FILES['preview_img'];
    $fileName = $_FILES['preview_img']['name']; // eg. 'myfile.jpg'
    $fileSize = $_FILES['preview_img']['size']; // eg. 500000 - this is in Bytes
    $fileType = $_FILES['preview_img']['type']; // eg. 'image/jpeg'
    $fileError = $_FILES['preview_img']['error']; // will be 0 if there is no error
    $fileTempLocation = $_FILES['preview_img']['tmp_name']; // temporary location of file on user's computer
    $fileExtension = explode(".", $fileName); // Split file name into two, seprated by the '.' so 'myfile.jpg' becomes 'myfile' and 'jpg'
    $fileActualExtension = strtolower(end($fileExtension)); // 'end' function returns the second half of the split results. So 'jpg' in this case.

    $allowedFileTypes = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtension, $allowedFileTypes)) { // If extension is inside the allowed file types array
        if ($fileError == 0) {
            if ($fileSize < 5000000) {
                if ($_SESSION['add-new']['ok'] == 'yes') {

                    $fileDestination = "../uploads/" . $fileName;
                    copy($fileTempLocation, $fileDestination); // Move file from temp location on user machine to the new location on web 
                    $_SESSION['add-new']['preview_img'] = $fileName; // Saving URL in the session to be sent to the Database later
                    $_SESSION['add-new']['preview_img_error'] = null; // Reset error session variable if it was previously set

                    for ($z = 0; $z < $_SESSION['countfiles']; $z++) {
                        copy($_FILES['gallery']['tmp_name'][$z], '../uploads/' . $_FILES['gallery']['name'][$z]);
                    }

                    header('Location: save-new-property.php');
                } else {
                    echo 'gallery not good but preview good';
                }
            } else {
                unset($_SESSION['add-new']['preview_img']);
                header("Location: ../add-images.php");
                $_SESSION['add-new']['preview_img_error'] = "<span class='error small-text'>* File size too large Must be less than 5mb.</span>";
            }
        } else {
            unset($_SESSION['add-new']['preview_img']);
            header("Location: ../add-images.php");
            $_SESSION['add-new']['preview_img_error'] = "<span class='error small-text'>* There was an error uploading this file.</span>";
        }
    } else {
        unset($_SESSION['add-new']['preview_img']);
        header("Location: ../add-images.php");
        $_SESSION['add-new']['preview_img_error'] = "<span class='error small-text'>* Nothing was selected OR Unsupported file type.</span>";
    }
}
