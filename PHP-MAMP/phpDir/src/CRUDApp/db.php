<?php
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
?>