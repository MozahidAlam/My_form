<?php
$host = "localhost";
$user = "root"; // default user
$pass = "";     // default password empty
$dbname = "web_lab";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
