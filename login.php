<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login form</h2>
    <form method="post" action="processLogin.php">
        <input type="text" name="username" placeholder="username"><br /><br />
        <input type="password" name="password" placeholder="password"><br /><br />
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
// if (isset($_GET['submit'])) {
//     $username = $_GET['username']; //get username input from form
//     $password = $_GET['password']; //get password input from form
//     echo "Entered username is:  " . $username;
//     echo "<br>";
//     echo "Entered password is: " . $password;
// }

if (isset($_POST['submit'])) {
    $username = $_POST['username']; //get username input from form
    $password = $_POST['password']; //get password input from form
    echo "Entered username is:  " . $username;
    echo "<br>";
    echo "Entered password is: " . $password;
}
?>