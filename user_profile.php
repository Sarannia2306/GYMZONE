<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <link rel="stylesheet" type="text/css" href="user_profile.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
 .container{
  width: 97%;
  background-color: black;
  padding: 25px 30px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.user-details {
      display: inline-block;
      color: white;
      text-align: left;
      padding: 20px;
      border: 1px solid red;
      border-radius: 10px;
      background-color: red;
  }

  .user-details img {
      max-width: 97px;
      border-radius: 10px;
      margin-top: 10px;
  }
  
    </style>
</head>
<body>

<div class="container">
    <h2>Profile Information</h2>

   <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
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

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_data WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $fullname = $row['fullname'];
    $phone_number = $row['phone_number'];
    $gender = $row['gender'];
    $age = $row['age'];
    $weight = $row['weight'];
    $height = $row['height'];
    $profile_pic = $row['profile_pic'];

    echo "Username: $username<br><br>";
    echo "Email: $email<br><br>";
    echo "Full Name: $fullname<br><br>";
    echo "Phone Number: $phone_number<br><br>";
    echo "Gender: $gender<br><br>";
    echo "Age: $age<br><br>";
    echo "Weight: $weight<br><br>";
    echo "Height: $height<br><br>";

    echo '<img src="' . htmlspecialchars($profile_pic, ENT_QUOTES, 'UTF-8') . '" alt="Profile Picture">';
} else {
    echo "User not found";
}

$stmt->close();
$conn->close();
?>


</div>

</body>
</html>
