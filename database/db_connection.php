<?php
function OpenCon()
{
    $dbServername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbDataBaseName = 'mi_casa';

    //$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");

    mysql_select_db($dbDataBaseName) or die("<h1>Could not connect to database.</h1>");
    return $conn;
}
function CloseCon($conn)
{
    $conn ->close();
}

?>