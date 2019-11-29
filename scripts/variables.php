<?php
if(session_status()== PHP_SESSION_NONE){
   session_start();
}

isset($_SESSION['userLevel']) ? $_SESSION['userLevel'] = $_SESSION['userLevel'] : $_SESSION['userLevel']="" ;
isset($_SESSION['currentUserID']) ? $_SESSION['currentUserID'] = $_SESSION['currentUserID'] : $_SESSION['current']="" ;
$_SESSION['price_min_search']="";
$_SESSION['price_max_search']="";
$_SESSION['address1']="";
$_SESSION['address2']="";
$_SESSION['city']="";
$_SESSION['parish']="";
$_SESSION['property_type']="";
$_SESSION['building_type']="";
$_SESSION['listing_type']="";
$_SESSION['landsize']="";
$_SESSION['bedrooms']="";
$_SESSION['bathrooms']="";
$_SESSION['price']="";
$_SESSION['add-new']['address1']="";
$_SESSION['add-new']['address2']="";
$_SESSION['add-new']['city']="";
$_SESSION['add-new']['parish']="";
$_SESSION['add-new']['property_type']="";
$_SESSION['add-new']['building_type']="";
$_SESSION['add-new']['listing_type']="";
$_SESSION['add-new']['landsize']="";
$_SESSION['add-new']['bedrooms']="";
$_SESSION['add-new']['bathrooms']="";
$_SESSION['add-new']['price']="";
$_SESSION['username_try']="";
$_SESSION['firstname']="";
$_SESSION['lastname']="";
$_SESSION['username']="";
$_SESSION['email']="";
$_SESSION['areacode']="";
$_SESSION['phonenumber']="";
$_SESSION['password']="";
$_SESSION['passwordconfirm']="";
$_SESSION['redirect']['header'] = "";
$_SESSION['redirect']['path'] = "";
$_SESSION['redirect']['message'] = "";

$currentUserID;
$userLevel;


?>