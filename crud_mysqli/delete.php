<?php
//include db connection
include("connection.php");

if (isset($_GET["deleteId"])) {
    $id = $_GET['deleteId'];
    $sqlDelete = "DELETE FROM users WHERE id='$id'";
    $sql = mysqli_query($cnx, $sqlDelete);

    if (!$sql) {
        echo "Error deleting record: " . mysqli_error($cnx);
    } else {
        header("Location: alluser.php"); // redirect to the list of users after deletion
    }
}
