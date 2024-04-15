<?php
// Start session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diigital_museum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the username and password match
    $sql = "SELECT * FROM registered_users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // If result matched, table row must be 1 row
    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect to index page
        header("location: index.php");
    } else {
        echo "Invalid username or password";
    }
}

// Close connection
$conn->close();
?>
