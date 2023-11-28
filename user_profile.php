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
        
        
        
        body {
            text-align: center;
            background-color: black;
        }

        .container{
         width: 50%;
         background-color: #f01e2c;
         padding: 25px 30px;
         border-radius: 10px;
         box-shadow: 0 5px 10px rgba(0,0,0,0.15);
         margin: auto;
         color: #000;
         
        }
        .user-details {
              display: inline-block;
              color: #fff;
              text-align: left;
              padding: 20px;
              border: 1px solid black;
              border-radius: 10px;
              background-color: black;
              width: 70%;
          }

          .user-details img {
              width: 100px;
              border-radius: 10px;
              margin-top: 10px;
              float: right;
          }
          
            .homepage-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: red;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
  
    </style>
</head>
<body>

<div class="container">
    <h2>Profile Information</h2>
    
    
<div class="user-details">
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

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM user_data WHERE id = ?";
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

    echo '<img src="' . htmlspecialchars($profile_pic, ENT_QUOTES, 'UTF-8') . '" alt="Profile Picture">'; 
    echo "Username: $username<br><br><br>";
    echo "Email: $email<br><br><br>";
    echo "Full Name: $fullname<br><br><br>";
    echo "Phone Number: $phone_number<br><br><br>";
    echo "Gender: $gender<br><br><br>";
    echo "Age: $age<br><br><br>";
    echo "Weight: $weight<br><br><br>";
    echo "Height: $height<br><br><br>";
} else {
    echo "User not found";
}

$stmt->close();
$conn->close();
?>
    
    <!-- Homepage Button -->
    <a href="homepage.php" class="homepage-button">Go to Homepage</a>
</div>

</div>
</div>

</body>
</html>
