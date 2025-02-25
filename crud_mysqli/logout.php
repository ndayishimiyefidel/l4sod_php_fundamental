<?php
session_start();

session_destroy();

session_unset();

//redirect to login page*(index.php)

header("Location: index.php");
