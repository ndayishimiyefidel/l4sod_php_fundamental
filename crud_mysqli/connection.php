<?php
//db connection properties
session_start();
$hostName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "library";

//db connection using mysqli (procedural)library
$cnx = mysqli_connect($hostName, $userName, $userPassword, $dbName);
if (!$cnx) {
    die("Could not connect to the database due to:") . mysqli_error($cnx);
} else {
    // echo "Database connection established";
}