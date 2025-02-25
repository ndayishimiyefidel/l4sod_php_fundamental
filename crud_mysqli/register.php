<?php
//include connection
//include "connection.php";
include("connection.php");

if (isset($_POST['save'])) {
    //get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //get file uploaded from the form
    $uploads = './uploads/';
    $fileName = $_FILES['profile']['name'];
    var_dump($fileName);
    echo "File name: " . $fileName;
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
    if (in_array($_FILES['profile']['type'], $allowed_types)) {
        $move_file = move_uploaded_file($_FILES['profile']['tmp_name'], $uploads . $fileName);
        if ($move_file) {
            echo "file uploaded successfully";
        } else {
            echo "Error: " . mysqli_error($cnx);
        }
    }
    //add new user to database
    $query = mysqli_query($cnx, "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')");
    if ($query) {
        echo "User added successfully";
    } else {
        echo "Error: " . mysqli_error($cnx);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Interface-MYSQLI</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form id="userForm" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="cpassword">Confirm Password:</label>
            <input type="password" id="password" name="cpassword" required>
            <label for="file">Choose Profile:</label>
            <input type="file" id="file" name="profile" required>
            <button type="submit" name="save">Register</button>
        </form>
        <a href="index.php">Login</a>

    </div>
</body>

</html>