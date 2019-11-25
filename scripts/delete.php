<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mi_casa") or die("<h1>Could not connect to database.</h1>");
$RegID = $_REQUEST['RegID'];
$query = "DELETE FROM register WHERE RegID=$RegID";
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");
header("Location: ../adminmenu.php");

?>