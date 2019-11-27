<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbDataBaseName = 'mi_casa';
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");
//mysql_select_db($dbDataBaseName) or die("<h1>Could not connect to database.</h1>"); //this works on yours?
