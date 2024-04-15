<?php
// Start session
session_start();

// Check if the logout button is clicked
if(isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page or any other page you want
    header("Location: adminlogin.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Logout</h2>
    <form action="admin_logout.php" method="post">
      <button type="submit" name="logout">Logout</button>
    </form>
  </div>
</body>
</html>


<style>
    body {
  font-family: Arial, sans-serif;
}

.container {
  width: 300px;
  margin: 100px auto;
  text-align: center;
}

button {
  padding: 10px 20px;
  background-color: black;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 16px;
}

button:hover {
  background-color:rgb(49, 46, 46);
}

<style>

