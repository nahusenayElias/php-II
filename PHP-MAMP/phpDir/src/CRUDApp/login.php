<?php 
$user = $password = "";
if(isset($_POST['submit'])) {  echo "yes, we received data";
    $user =$_POST ['username'];
    $pass =$_POST ['password'];

    echo $user . " " . $pass;
}

//validate

if ($user && $pass) {
    echo $user . " " . $pass;
} else {
    echo "user name and password cannot be blank";
}
$host = 'db';

//database user name

$dbname = 'loginapp';
$dbuser = 'root';
$dbpass = 'lionPass';

//check mysql connection

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if($conn->connect_error) {
    die ("connection failed: ". $conn->connect_error);
} else {
    echo "connected to mysql server successfully!";
}

//Create the records inside db

 //$query = "INSERT INTO users(username, password)";
 //$query .= "VALUES('$user', '$pass')";

$query = "SELECT * FROM users";
// $result = 

$result = mysqli_query($conn, $query);

if(!$result) {
 die ('redebug db records failed');
}
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);


?>

<pre>
    <?php
    print_r($row);
    ?>
</pre>
<?php
}
?>


<form action="login.php" method="post">
    
    <label for="username">Username</label><br>
    <input type="text" name="username">
    <label for="password">Password</label><br>
    <input type="text" name="password">
    <input type="submit" name="submit" value="submit">
</form>