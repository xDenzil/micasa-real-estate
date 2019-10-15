<?php 
  if(session_status() == PHP_SESSION_NONE){
    session_start();
    if(!$_SESSION['active']){
      header('Location: registration.php');
    } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Property</title>
</head>
<body>
<form action="saveproperty.php" method="post">
<p>Full name: <?php echo $_SESSION['fullname'] ?></p>
    <p>email: <?php echo $_SESSION['email'] ?></p>
    <p>telephone: <?php echo $_SESSION['tel'] ?></p>
    <p>username: <?php echo $_SESSION['username'] ?></p>
    <p>passowrd: <?php echo $_SESSION['password'] ?></p>
    <p>passowrd confirm: <?php echo $_SESSION['password2'] ?></p>
    <p>address 1: <?php echo  isset($_SESSION['address1']) ? $_SESSION['address1'] : "" ?></p>
    <p>address 2: <?php echo isset($_SESSION['address2'])  ? $_SESSION['address2'] : "" ?></p>
    <p>city: <?php echo isset($_SESSION['city'])  ? $_SESSION['city'] : "" ?></p>
    <p>parish: <?php echo isset($_SESSION['parish'])  ? $_SESSION['parish'] : "" ?></p>
    <p>properties: <?php echo isset($_SESSION['properties'])  ? $_SESSION['properties'] : "" ?></p>
    <p>building: <?php echo isset($_SESSION['building'])  ? $_SESSION['building'] : "" ?></p>
    <p>listing: <?php echo isset($_SESSION['listing'])  ? $_SESSION['listing']: "" ?></p>
    <p>size: <?php echo isset($_SESSION['size'] )  ? $_SESSION['size']  : "" ?></p>
    <p>bedrooms: <?php echo isset($_SESSION['bedrooms'])  ? $_SESSION['bedrooms'] : "" ?></p>
    <p>bathrooms: <?php echo isset($_SESSION['bathrooms'])  ? $_SESSION['bathrooms'] : "" ?></p>
    <p>price: <?php echo isset($_SESSION['price'])  ? $_SESSION['price'] : "" ?></p>
    <button id="save" type="submit">save</button>
</form>
    
</body>

</html>