<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    echo "<h2>Data inserted successfully!</h2>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
