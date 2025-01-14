<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    echo "Session Email data:" . $_SESSION['email'];
    echo "Session password data:" . $_SESSION['password'];
} else {
    echo "Session data is not set.please set it";
}
