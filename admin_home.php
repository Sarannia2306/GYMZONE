<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$username = 'root';
$password = 'root';

if (
    !isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $username ||
    !password_verify($_SERVER['PHP_AUTH_PW'], $password)
) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access Denied';
    exit;
}

// Redirect to admin_home.php on successful authentication
header('Location: admin_home.php');
exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <title>Admin Homepage</title>
</head>
<body>
   <nav class="sidebar close">
  <header>
 
        <div class="text logo-text">
          <span class="name">GYMZONE</span>
        </div>
      </a> 
    </div>
    <i class='bx bx-chevron-right toggle'></i>
  </header>
       
       <div id="notification-container" class="notification-container"></div>
       
  <div class="menu-bar">
    <div class="menu">
      <ul class="menu-links">
        <li class="nav-link">
          <a href="admin_user.php">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-link">
            <a href="admin_class.php">
            <i class='bx bx-bar-chart-alt-2 icon'></i>
            <span class="text nav-text">Contents</span>
          </a>
        </li>
        <li class="nav-link">
            <a href="admin_noti.php">
            <i class='bx bx-bell icon'></i>
            <span class="text nav-text">Notifications</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="admin_feedback.php">
            <i class='bx bx-heart icon'></i>
            <span class="text nav-text">Feedback</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="bottom-content">
      <li class="">
        <a href="#">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>
      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text">Dark mode</span>
        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>
    </div>
  </div>
</nav>

<h2> Admin GYMZONE </h2>


<script>
        document.addEventListener("DOMContentLoaded", function () {
          const body = document.querySelector("body"),
            sidebar = body.querySelector("nav"),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

          toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
          });

          searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
          });

          modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
              modeText.innerText = "Light mode";
            } else {
              modeText.innerText = "Dark mode";
            }
          });

            // Function to add a notification
            function addNotification(message) {
                const notification = document.createElement("div");
                notification.classList.add("notification");
                notification.innerText = message;
                notificationContainer.appendChild(notification);

                // Automatically remove the notification after a certain time
                setTimeout(() => {
                    notification.remove();
                }, 5000); // Adjust the time as needed (in milliseconds)
            }

            // Example: Add a notification when the page loads
            addNotification("Welcome to Admin GYMZONE!");
        });

</script>


</body>
</html>
