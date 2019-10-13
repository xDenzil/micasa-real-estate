<?php
$fullname;
$tel;
$email;	
$username;	
$password;	
$password2;	

if(isset($_POST["username"])){
    $username = $_POST["username"];	
}

if(isset($_POST["email"])){
    $email = $_POST["email"];	
}

if(isset($_POST["password"])){
    $password = $_POST["password"];
}
if(isset($_POST["password2"]) && $_POST["password"] == $_POST["password2"]){
    $password2 = $_POST["password2"];
}
	
if(isset($_POST["fullname"])){
    $fullname = $_POST["fullname"];
}

if(isset($_POST["telephone"])){
    $tel = $_POST["telephone"];
}
	

$fullnameErr = "asas";
$telErr = "";
$emailErr = "";
$usernameErr = "";
$passwordErr = "";
$passwordMatchErr = "";
$password2Err = "";
$err = 0;

if($fullname == null) $err++;

	

if($tel == null) $err++;

if($email == null)$err++;
else if (!preg_match('/^[a-zA-Z0-9\_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email))
    $err++;

if($username == null)$err++;

if($password == null)$err++;
if($password != $password2)$err++;
if($password2 == null)$err++;
    
    
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['fullname'] =  $fullname;
$_SESSION['email'] =  $email ;
$_SESSION['tel'] =  $tel ;
$_SESSION['username'] =  $username;
$_SESSION['password'] =  $password;
$_SESSION['password2'] = $password2;

if($err>0) header('Location: registration.php');
else{ 
    $_SESSION['active'] = true;
    header('Location: location.php');
}
?>



