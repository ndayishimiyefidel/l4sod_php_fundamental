<?php
//include connection
//include "connection.php";
include("connection.php");
//protect to access all user page without login.

if (!isset($_SESSION['user_email'])) {
    echo "<script>alert('Please login first');</script>";
    header("Location:index.php"); //redirect me to login page
    exit;
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
        <div class="logout">
            <a href="logout.php" style="float: right;font-size:15px;text-decoration:none;">Logout</a>
        </div>
        <h1>User Management System</h1>

        <h1>User List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be inserted dynamically -->
                <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($cnx, $sql);
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $i = $i + 1;
                    //load data
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "<td><a href='edit.php?editId=" . $row['id'] . "'>Edit</a> | <a href='delete.php?deleteId=" . $row['id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>