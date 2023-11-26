<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO notifications (user_id, message) VALUES ($user_id, '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Notification sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



