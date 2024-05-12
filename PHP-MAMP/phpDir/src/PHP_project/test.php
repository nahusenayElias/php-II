 <?php
 include 'db.php';

 if(isset($_GET['id'])) {
    // echo $_GET['id'];
     $id=$_GET['id'];
    $delete=mysqli_query($conn, "DELETE FROM books WHERE id=$id");

    // header("location: test.php");
    // exit();
 }

 $select = "SELECT * FROM books";
 $query=mysqli_query($conn, $select);
//  if(mysqli_num)
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete from data base</title>
    <link rel="stylesheet" href="test.php">

 </head>
 <body>
    <table border="1" cellpadding="0">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Del Op</th>
        </tr>
        <?php 
        $num= mysqli_num_rows($query);
        if ($num>0) {
            while ($data=mysqli_fetch_assoc($query)) {
                // echo $data['id'];
                echo "
            <tr>
            <td>".$data['id']."</td>
            <td>".$data['title']."</td>
            <td>".$data['description']."</td>
            <td>".$data['author']."</td>
            <td>".$data['publishing_year']."</td>
            <td>".$data['genre']."</td>
            <td>
            <a href='test.php?id=".$data['id']."' class='btn'>Delete</a>
            </td>
        </tr>
        ";
        }
    }

        ?>
        
    </table>
 </body>
 </html>