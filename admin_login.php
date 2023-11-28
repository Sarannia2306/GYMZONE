<?php
$username = 'root';
$password = 'root';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $username || crypt($_SERVER['PHP_AUTH_PW'], $password) !== $password) {
    
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access Denied';
    exit;
}

//protected content goes here
echo '<p>Welcome to the protected area!</p>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
        <title>Admin Login</title>
</head>
<body>
 <div class="login-container">
        <h2>Admin GYMZONE</h2>
        <div class="content">
            <header>Login Form</header>
            <form action="admin_home.php" method="post" onsubmit="return login()">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" id="username" name="username" required placeholder="Username">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" id="password" name="password" class="pass-key" required placeholder="Password">
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN">
               </div>
            </form>
        </div>
    </div>

    <script>
        function login() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if the username and password are correct
            if (username.toLowerCase() === "admin" && password === "ADMIN") {
                // Return true to allow form submission and redirect to admin_home.php
                return true;
            } else {
                alert("Invalid username or password");
                // Return false to prevent form submission
                return false;
            }
        }
    </script>
</body>
</html>
