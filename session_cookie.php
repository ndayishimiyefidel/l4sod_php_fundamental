<?php
session_start();

$_SESSION['email'] = "example@example.com";
$_SESSION['password'] = "12345";
echo "<br>";
echo "Echo sesssion data is set correctly";
echo "Email:" . $_SESSION['email'] . " <br>Password:" . $_SESSION['password'];
echo "<br>";
//change the session variable value
$_SESSION['email'] = "test@example.com";
$_SESSION['password'] = "test@123";

echo "Modified Email:" . $_SESSION['email'] . " <br>Modified Password:" . $_SESSION['password'];

//set cookies