<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "diigital_museum";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file was uploaded
if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    // Get file details
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // Read the file content
    $image_data = file_get_contents($file_tmp);
    $image_data = $conn->real_escape_string($image_data); // Escape special characters

    // Get form data
    $aname = $_POST['aname'];
    $description = $_POST['description'];

    // Insert user data into database including the image data
    $sql = "INSERT INTO artifacts (aname, description, image) VALUES ('$aname', '$description', '$image_data')";

    if ($conn->query($sql) === TRUE) {
        header("Location: adminpanel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading file";
}

$conn->close();
?>
