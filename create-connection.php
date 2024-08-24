<?php 
$servername = "127.0.0.1";
$database = "jlo";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry. Connection failed: " . mysqli_connect_error());
}

?>