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
  // echo "name: " . $name;
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
    <h1>User Management System</h1>
    <form id="userForm" method="POST">
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
      <button type="submit" name="save">Save</button>
    </form>
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
        while ($row = mysqli_fetch_array($result)) {
          //load data
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
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