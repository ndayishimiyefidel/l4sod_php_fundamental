<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Hello " . $_REQUEST['username'];
    echo $_SERVER['SERVER_NAME'];

    // echo "Username: " . $username . "<br>password:" . $password;

    //assume the db username and password

    $db_username = 'admin';
    $db_password = 'password';
    if ($username == $db_username && $password == $db_password) {
        echo "\nLogin successful";
    } else {
        echo "Invalid username or password";
    }
}
