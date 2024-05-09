<!-- index.php -->
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Website</title>
</head>
<body>
    <h1>Welcome to the EveryDay Fashion Website!</h1>
    <!-- Your main website content goes here -->
    <div class="main">
        <h2>EveryDay Fashion</h2>
</body>
</html>
