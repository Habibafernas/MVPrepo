<!-- login.php -->
<?php ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect login data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists and passwords match
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User authenticated
    $_SESSION['loggedin'] = true;
    header("Location: index.php"); // Redirect to main website
    exit;
} else {
    // Authentication failed
    echo "Invalid email or password";
}

$conn->close();
?>
