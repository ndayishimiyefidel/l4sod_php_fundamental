<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    echo "Session Email data1:" . $_SESSION['email'];
    echo "Session password data1:" . $_SESSION['password'];
} else {
    echo "Session data not available";
}
