<?php
    
    //Using Files, store the information entered on the following, respectively:
    //contact.txt, location.txt, description.txt 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
        if(!$_SESSION['active']){
            header('Location: registration.php');
        } 
    }
    $contact = fopen("contact.txt", "w") or die("Unable to open file!");
    fwrite($contact, $_SESSION['username']."\n");
    fwrite($contact, $_SESSION['fullname']."\n");
    fwrite($contact, $_SESSION['email']."\n");
    fwrite($contact, $_SESSION['tel']."\n");
    fwrite($contact, $_SESSION['password']."\n");
    fwrite($contact, $_SESSION['password2']."\n");
    fclose($contact);

    $location = fopen("location.txt", "w") or die("Unable to open file!");
    fwrite($location, $_SESSION['username']."\n");
    fwrite($location, $_SESSION['address1']."\n");
    fwrite($location, $_SESSION['address2']."\n");
    fwrite($location, $_SESSION['city']."\n");
    fwrite($location, $_SESSION['parish']."\n");
    fclose($location);
    
    $description = fopen("description.txt", "w") or die("Unable to open file!");
    fwrite($description, $_SESSION['properties']."\n");
    fwrite($description, $_SESSION['building']."\n");
    fwrite($description, $_SESSION['listing']."\n");
    fwrite($description, $_SESSION['size']."\n");
    fwrite($description, $_SESSION['bedrooms']."\n");
    fwrite($description, $_SESSION['bathrooms']."\n");
    fwrite($description, $_SESSION['price']."\n");
    fclose($description);
    echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
                <h1>Documents saved</h1>
                <a href="index.php">back to home</a>
            </body>
            </html>';
?>
