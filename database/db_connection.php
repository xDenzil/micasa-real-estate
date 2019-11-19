<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbDataBaseName = 'micasa';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");

mysql_select_db($dbDataBaseName) or die("<h1>Could not connect to database.</h1>");


?>