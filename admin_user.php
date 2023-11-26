<?php
// Sample connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnessdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data from the database
$sql = "SELECT fullname, email, username FROM user_data";
$result = $conn->query($sql);

$users = [];

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Fetch user data and store it in the $users array
    while ($row = $result->fetch_assoc()) {
        $users[] = [
            'fullname' => $row['fullname'],
            'email' => $row['email'],
            'username' => $row['username'],
        ];
    }
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_user.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <title>User Management</title>
</head>
<body>
   <nav class="sidebar close">
  <header>
        <div class="text logo-text">
          <span class="name">GYMZONE</span>
        </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>
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
          <a href="user_feedback.php">
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
});
</script>

    <div class="home">
        <h1>User Management</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>

            <?php foreach ($users as $user): ?>
            <tr>
               <td><?= $user['fullname'] ?></td>
               <td><?= $user['email'] ?></td>
               <td><?= $user['username'] ?></td>
            </tr>
         <?php endforeach; ?>
            
        </table>
    </div>

</body>
</html>
