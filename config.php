<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "fitnessdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
include 'config.php'; // Include your database connection details

// Assuming you have a user ID, replace 1 with the actual user ID you want to check
$user_data = 1;

$sql = "SELECT * FROM users WHERE id = $user_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User details found
    while ($row = $result->fetch_assoc()) {
        echo "User ID: " . $row["id"] . "<br>";
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        
    }
} else {
    // User not found
    echo "User not found in the database.";
}

$conn->close();
?>
