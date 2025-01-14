<?php
include('connection.php');

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
        <h1>Update User</h1>
        <?php
        $id = $_GET['editId'];
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($cnx, $sql);
        $row = mysqli_fetch_assoc($result);
        // echo $row['id'];
        ?>
        <form id="userForm" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password'] ?>" required>
            <button type="submit" name="update">Update</button>
        </form>

    </div>
</body>

</html>

<?php

if (isset($_POST['update'])) {
    //get user data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sqlupdate = "UPDATE users SET name='$name', email='$email', phone='$phone', password='$password' WHERE id='$id'";
    $sql = mysqli_query($cnx, $sqlupdate);
    if (!$sql) {
        echo "Error updating record: " . mysqli_error($cnx);
    } else {
        header("Location: index.php");
        exit;
    }
}
?>