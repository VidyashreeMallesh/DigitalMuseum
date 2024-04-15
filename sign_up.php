<?php

include 'dbCon.php';

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert user data into database
$sql = "INSERT INTO registered_users(username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
