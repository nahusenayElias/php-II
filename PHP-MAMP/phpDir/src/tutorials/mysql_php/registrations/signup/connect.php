<?php
$hostname = 'db';
$username = 'root';
$password = 'Za81as@#1212';
$database = 'signupforms';


$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn) {
    echo "Failed";
} else {

    echo "Connection successful";
} 
;

?>