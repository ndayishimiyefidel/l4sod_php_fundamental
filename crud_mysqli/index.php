<?php
//include connection
//include "connection.php";
include("connection.php");


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

    <?php
  if (isset($_POST['login'])) {
    //get form data
    $email = $_POST['email'];

    $password = $_POST['password'];
    // echo "name: " . $name;
    //add new user to database
    $query = mysqli_query($cnx, "SELECT * FROM  users WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($query) > 0) {
      $user = mysqli_fetch_assoc($query);
      $_SESSION['user_email'] = $user['email'];
      header("Location: alluser.php");  //redirect to dashboard page if 
    } else {
      $_SESSION['error'] = 'invalid user name and password';
      header("Location: alluser.php");  //redirect back to login page if login fails
      echo "Error: " . mysqli_error($cnx);
    }
  }
  ?>
    <div class="container">
        <h1>Login</h1>
        <form id="userForm" method="POST">


            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Login</button>
            <a href="register.php">Register</a>
        </form>


    </div>
</body>

</html>