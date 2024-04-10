<?php include 'db.php'; 

// header("Location: ");
// header('Location: '.$_SERVER['PHP_SELF']);
// die;

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}
 
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

//prepare an update with placeholders. 
$stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");

if ($stmt === false) {
  die("Prepare fialed: " . $conn->error);
}

//bind variables to prepared statement as strings and integer.
$stmt->bind_param("ssi", $username, $password, $id);

//execute the prepared statemnt and check the result.
if ($stmt->execute()) {
  //redirect to the same page to prevent form subission.
   header('Location: ' . $_SERVER['PHP_SELF']);
}

//   //Update the records in db
//   $query = "UPDATE users SET ";
//   $query .= "username = '$username', ";
//   $query .= "password = '$password' ";
//   $query .= "WHERE id = $id";

//   $result = mysqli_query($conn, $query);
//   if (!$result) {
//     die("Update query failed" . mysqli_error($conn));
//   }
//   else { 
//     header('Location: ' . $_SERVER['PHP_SELF']);
//     exit;
// }

}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="update.php" method="post">

    <p>
    <label for="username"> Username: </label>
    <input type="text" name="username">
    </p>
    <p>
    <label for="password"> Password: </label>
    <input type="password" name="password">
    </p>
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">

  </form>


</body>

</html>