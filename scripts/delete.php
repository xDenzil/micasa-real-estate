<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mi_casa") or die("<h1>Could not connect to database.</h1>");
$username = $_REQUEST['Username'];
$query = "DELETE FROM register WHERE Username=$username";
$result = mysqli_query($conn, $query) or die("<h1>Could not connect to database.</h1>");
header("Location: ../adminmenu.php");
