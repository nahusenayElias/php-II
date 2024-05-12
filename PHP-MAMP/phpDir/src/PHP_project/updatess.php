<?php include 'db.php';


$id = $_GET['id'];
$select="SELECT * FROM books where id=$id";
$data = mysqli_query($conn, $select);
$row = mysqli_fetch_array($data);

?>
<div>
<h3>Update booksite data</h3>
<form method="post">
<input value="<?php echo $row['title']?>" type="text" class="title" id="" placeholder="Title"><br><br>
<input value="<?php echo $row['author'];?>"type="text" class="author" id="" placeholder="author"><br><br>
<input value="<?php echo $row['description'];?>"type="text" class="description" id="" placeholder="description"><br><br>
<input value="<?php echo $row['publishing_year'];?>"type="text" class="publishing_year" id="" placeholder="Publishing year"><br><br>
<input value="<?php echo $row['genre'];?>"type="text" class="genre" id="" placeholder="genre"><br><br>
<input type="button" name="update-btn" value="update">
<button>Update</button><br><br>
</form>

</div>

<?php

if (isset($_POST['update-btn'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $publishing_year = $_POST['publishing_year'];
    $genre = $_POST['genre'];


    $update = "UPDATE FROM `books` set `title` = '$title', `author` = '$author',`description` = '$description', `publishing_year` = '$publishing_year', `genre` = '$genre' WHERE id = $id";

  // $query="INSERT INTO books (title,author,description,publishing_year,genre) VALUES('$title','$author','$description',$publishing_year,'$genre')";
  $data=mysqli_query($conn, $update);
}
  if($data) {
  
?>
<script type="text/javascript">
  alert("Data updated");
</script>
<?php
}
else
{
?>
<script type="text/javascript">
  alert("try again");
</script>
<?php

}
?>
  