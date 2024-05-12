<?php 
include 'db.php';
    //  include 'insert.php';

    $query = "SELECT * FROM books";
    $result = mysqli_query($conn, $query);

    if (isset($_GET['submit'])) {
        $id = $_GET['id'];
        
        //Delete
        $query = "DELETE FROM books where id = $id";

        $result = mysqli_query($conn,$query);

    
    if (!$result) {
        die('query failed');
    
    } else {
        echo "deleted successfully";
    }
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <form action="delete.php" id="id">Delete Books by ID
        <select name="id" id="" >
    <input type="text" placeholder="Enter Id">
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <button type="submit" id="id" >delete</button>
    <!-- <button class="btn btn-danger" value="delete"></a> </button> -->
    <input type="submit" id=".$row['id']." name="submit" value="DELETE"> 
</form>
</head>
<body>
    
</body>
</html>