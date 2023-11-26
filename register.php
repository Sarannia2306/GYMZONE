<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" type="text/css" href="register.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="video-background">
    <video autoplay loop muted playsinline>
        <source src="home.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="title">Sign Up</div>
        <div class="content">
            
           <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: register.php"); 
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Process profile picture
    $profilePic = $_FILES['profile_pic']['name'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($profilePic);
    move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile);

    // Database connection details (replace with your actual details)
    $host = "localhost";
    $user = "root";
    $password_db = "";
    $database = "fitnessdb";

    // Create connection
    $conn = new mysqli($host, $user, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    // Insert data into the user_data table using prepared statement
    $sql = "INSERT INTO `user_data` (`username`, `email`, `password`, `fullname`, `phone_number`, `gender`, `age`, `weight`, `height`, `profile_pic`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $username, $email, $hashedPassword, $fullname, $phone_number, $gender, $age, $weight, $height, basename($profilePic));

    if ($stmt->execute()) {
        // Set the user ID in a session variable
        $_SESSION['user_id'] = $conn->insert_id;
        // Redirect to the user profile page
        header("Location: user_profile.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    // Close the connection
    $conn->close();

    }
    ?>

           
            <form method="post" action="" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone_number" placeholder="Enter your number" required>
                    </div>
                  <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>
                        <div class="input-box">
                    <span class="details">Age</span>
                    <input type="text" name="age" placeholder="Enter your age" required>
                </div>
                <div class="input-box">
                    <span class="details">Weight</span>
                    <input type="text" name="weight" placeholder="Enter your weight" required>
                </div>
                <div class="input-box">
                    <span class="details">Height</span>
                    <input type="text" name="height" placeholder="Enter your height" required>
                </div>
                <div class="input-box">
                    <span class="details">Profile Picture</span>
                    <input type="file" name="profile_pic" accept=".jpg, .jpeg, .png" value="" required>
                </div>
                 </div>
                <div class="gender-details">
                <input type="radio" name="gender" id="dot-1" value="Male">
                <input type="radio" name="gender" id="dot-2" value="Female">
                <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>

                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
            <p class="terms-text" style="color:#fff;">
                By signing up, you agree to our
                <a href="terms.php" target="_blank">Terms and Conditions</a>.
            </p>
        </div>
    </div>
</div>
    
    <script type="module">
        
    //client-side validation
    function validateForm() {
        var fullname = document.getElementById("fullname").value;
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var phone_number = document.getElementById("phone_number").value;
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        var age = document.getElementById("age").value;
        var weight = document.getElementById("weight").value;
        var height = document.getElementById("height").value;
        var profile_pic = document.getElementById("profile_pic").value;

        // Check if fields are not empty
        if (fullname == "" || username == "" || email == "" || phone_number == "" || password == "" || confirm_password == "" || age == "" || weight == "" || height == "" || profile_pic == "") {
            alert("All fields must be filled out");
            return false;
        }

        // Check if email is in a valid format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Invalid email format");
            return false;
        }

        // Check if age is a number
        if (isNaN(age) || age <= 0) {
            alert("Invalid age");
            return false;
        }

        // Check if password matches the confirm password
        if (password != confirm_password) {
            alert("Passwords do not match");
            return false;
        }

        // Check password complexity (at least 8 characters, one uppercase letter, one lowercase letter, and one digit)
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        if (!passwordRegex.test(password)) {
            alert("Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one digit");
            return false;
        }


        return true;
    }
    </script>


</body>
</html>