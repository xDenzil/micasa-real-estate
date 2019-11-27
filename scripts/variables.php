<?php
if(session_status()== PHP_SESSION_NONE){
   session_start();
}
$_SESSION['userLevel']='userLevel';
$_SESSION['price_min_search']="";
$_SESSION['price_max_search']="";
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

/*$_SESSION['currentUserID'];
$_SESSION['userLevel'];*/
$currentUserID;
$userLevel;


?>