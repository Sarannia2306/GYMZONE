<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
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
        <div class="title">Register</div>
        <div class="content">
            
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
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
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
     // Check if gender is set in $_POST
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        // Handle the case when gender is not set
        $gender = "Prefer not to say";
    }
    
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
        $_SESSION['id'] = $conn->insert_id;
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


                     <form method="post" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required>
                        <div class="error-message" id="fullname-error"></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        <div class="error-message" id="username-error"></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                        <div class="error-message" id="email-error"></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" id="phone_number" name="phone_number" placeholder="Enter your number" required>
                        <div class="error-message" id="phone_number-error"></div>
                    </div>
                  <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <div class="error-message" id="password-error"></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                        <div class="error-message" id="confirm_password-error"></div>
                    </div>
                        <div class="input-box">
                    <span class="details">Age</span>
                    <input type="text" id="age" name="age" placeholder="Enter your age" required>
                    <div class="error-message" id="age-error"></div>
                </div>
                <div class="input-box">
                    <span class="details">Weight</span>
                    <input type="text" id="weight" name="weight" placeholder="Enter your weight" required>
                    <div class="error-message" id="weight-error"></div>
                </div>
                <div class="input-box">
                    <span class="details">Height</span>
                    <input type="text" id="height" name="height" placeholder="Enter your height" required>
                    <div class="error-message" id="height-error"></div>
                </div>
                <div class="input-box">
                    <span class="details">Profile Picture</span>
                    <input type="file" id="profile_pic" name="profile_pic" accept=".jpg, .jpeg, .png" required>
                    <div class="error-message" id="profile_pic-error"></div>
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
                <div class="error-message" id="gender-error"></div>
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
    
    <script>
    function validateForm() {
        // Reset error messages
        resetErrorMessages();

        var isValid = true;

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
        var gender = document.querySelector('input[name="gender"]:checked');

        // Check if fields are not empty
        if (fullname == "") {
            displayError("fullname-error", "Full Name must be filled out");
            isValid = false;
        }

        if (username == "") {
            displayError("username-error", "Username must be filled out");
            isValid = false;
        }

        if (email == "") {
            displayError("email-error", "Email must be filled out");
            isValid = false;
        }

        if (phone_number == "") {
            displayError("phone_number-error", "Phone Number must be filled out");
            isValid = false;
        }

        if (password == "") {
            displayError("password-error", "Password must be filled out");
            isValid = false;
        }

        if (confirm_password == "") {
            displayError("confirm_password-error", "Confirm Password must be filled out");
            isValid = false;
        }

        if (age == "") {
            displayError("age-error", "Age must be filled out");
            isValid = false;
        }

        if (weight == "") {
            displayError("weight-error", "Weight must be filled out");
            isValid = false;
        }

        if (height == "") {
            displayError("height-error", "Height must be filled out");
            isValid = false;
        }

        if (profile_pic == "") {
            displayError("profile_pic-error", "Profile Picture must be filled out");
            isValid = false;
        }

        // Check if email is in a valid format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            displayError("email-error", "Invalid email format");
            isValid = false;
        }

        // Check if age is a number
        if (isNaN(age) || age <= 0) {
            displayError("age-error", "Invalid age");
            isValid = false;
        }

        // Check if password matches the confirm password
        if (password !== confirm_password) {
            displayError("confirm_password-error", "Passwords do not match");
            isValid = false;
        }

        // Check password complexity (at least 8 characters, one uppercase letter, one lowercase letter, and one digit)
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        if (!passwordRegex.test(password)) {
            displayError("password-error", "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one digit");
            isValid = false;
        }

        // Check if gender is selected
        if (!gender) {
            displayError("gender-error", "Gender must be selected");
            isValid = false;
        }

        return isValid;
    }

    function displayError(id, message) {
        var errorElement = document.getElementById(id);
        errorElement.innerHTML = message;
        errorElement.style.display = "block";
    }

    function resetErrorMessages() {
        var errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach(function (element) {
            element.innerHTML = "";
            element.style.display = "none";
        });
    }
    </script>
    

</body>
</html>