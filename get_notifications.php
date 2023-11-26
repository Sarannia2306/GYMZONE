<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM notifications WHERE user_id = $user_id ORDER BY id DESC";
    $result = $conn->query($sql);

    $notifications = array();

    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }

    echo json_encode($notifications);
}

$conn->close();
?>
