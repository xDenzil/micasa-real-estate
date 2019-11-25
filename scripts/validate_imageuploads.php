<?php
session_start();
if (isset($_POST['add-image'])) {
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
                $fileDestination = "../uploads/" . $fileName;
                move_uploaded_file($fileTempLocation, $fileDestination); // Move file from temp location on user machine to the new location on web 
                $_SESSION['preview_img'] = $fileName; //Saving URL in the session to be sent to the Database later
                $_SESSION['preview_img_error'] = null; //Reset error session variable if it was previously set
                header("Location: registrationToDatabase.php");
            } else {
                unset($_SESSION['preview_img']);
                header("Location: ../add-images.php");
                $_SESSION['preview_img_error'] = "<span class='error small-text'>* File size too large Must be less than 5mb.</span>";
            }
        } else {
            unset($_SESSION['preview_img']);
            header("Location: ../add-images.php");
            $_SESSION['preview_img_error'] = "<span class='error small-text'>* There was an error uploading this file.</span>";
        }
    } else {
        unset($_SESSION['preview_img']);
        header("Location: ../add-images.php");
        $_SESSION['preview_img_error'] = "<span class='error small-text'>* Unsupported file type.</span>";
    }
}
