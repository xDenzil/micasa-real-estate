<?php
$address1;
$address2;
$city;	
$parish;

if(isset($_POST["address1"])){
    $address1 = $_POST["address1"];	
}

if(isset($_POST["address2"])){
    $address2 = $_POST["address2"];	
}

if(isset($_POST["city"])){
    $city = $_POST["city"];
}
if(isset($_POST["parish"])){
    $parish = $_POST["parish"];
}

$err = 0;

if($address1 == null) $err++;

if($address2 == null) $err++;

if($city == null)$err++;

if($parish == null)$err++;
    
    
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['address1'] =  $address1;
$_SESSION['address2'] =  $address2 ;
$_SESSION['city'] =  $city ;
$_SESSION['parish'] =  $parish;

if($err>0) header('Location: location.php');
else{ 
    $_SESSION['active'] = true;
    header('Location: description.php');
}
?>



