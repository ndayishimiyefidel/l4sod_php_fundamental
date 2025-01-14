<?php

$y = 2;
$x = 3;

//AND LOGICAL OPERATOR
$result = (($y > 10) || ($x > 1));
echo var_dump($result);
echo var_dump(!($y > 2));

$inputPassword = "user123";
$storePassword = "user123";

if ($inputPassword == $storePassword) {
    echo "login successful";
} else {
    echo "incorrect password";
}
$isLoggedIn = true;
$permissions = true;
if ($isLoggedIn && $permissions) {
    echo "Access granted";
} else {
    echo "Access denied";
}


// echo "the result is $result"; //