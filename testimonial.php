<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$host = "localhost";
$user = "root";
$password_db = "";
$database = "fitnessdb";

$conn = new mysqli($host, $user, $password_db, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Insert data into messages table
    $sql = "INSERT INTO messages (user_id, message_content, photo_path) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Assuming $user_id, $message, and $photo_path are variables holding the corresponding values
    $user_id = $_SESSION['id'];
    $message = $conn->real_escape_string($_POST['message']); // Assuming you have a message input in your form
    $photo_path = basename($_FILES['photo']['name']); // Use only the file name without directory

    $stmt->bind_param("iss", $user_id, $message, $photo_path);
    $stmt->execute();
    $stmt->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM Zone Testimonial</title>

    <link rel="stylesheet" type="text/css" href="classes.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

    <style>

        #message-container {
            width: 50%;
            margin: 200px auto;
            padding: 20px;
            background-color: #f01e2c;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
            color: #fff;
            text-align: center;
        }

        #message-form {
            text-align: center;
            margin-top: 20px;
        }

        #message-input {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #post-button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .posted-message-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #4CAF50;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            color: #fff;
            text-align: center;
            margin-top: 20px;
        }

        .message {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .message img {
            max-width: 100%;
            border-radius: 5px;
        }

    </style>
<body>

<header>
    <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
    <div id="navbar-right">
        <a class="active" href="classes.php">CLASSES</a>
        <a href="contact.php">CONTACT</a>
        <a href="register.php">JOIN NOW</a>
        <a href="BMI.html">BMI</a>
    </div>
</header>

        <div id="message-container">
            <h2>Write a Message</h2>
            <form id="message-form" method="post" enctype="multipart/form-data">
                <textarea id="message-input" name="message" placeholder="Write your message here..." required></textarea>
                <br>
                <input type="file" name="photo" accept="image/*">
                <br>
                <button type="submit" id="post-button">Post</button>
            </form>
        </div>



<div class="mark">
    <div class="zone">
        <?php
        // Number of times to repeat the text
        $numberOfTimes = 12;

        for ($i = 0; $i < $numberOfTimes; $i++) {
            // Use a CSS class to style the text as bold
            echo '<span class="zone bold-text">GYM ZONE</span>';
        }
        ?>
    </div>
</div>
<br><br><br><br><br>
<footer>
    <div class="social-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
    </div>
    <p>&copy; 2023 GYM Zone</p>
</footer>

</body>
</html>