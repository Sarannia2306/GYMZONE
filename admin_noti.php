<?php
// Connect to the database (replace 'your_username', 'your_password', and 'your_database' with your actual database credentials)
$mysqli = new mysqli('localhost', 'root', '', 'fitnessdb');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Handle form submissions for communication tools
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'sendNotification') {
        $notificationContent = $_POST['notificationContent'];

        // Insert notification into the database
        $sql = "INSERT INTO notifications (type, content) VALUES ('Notification', '$notificationContent')";
        $mysqli->query($sql);

        header("Location: admin_noti.php?notificationContent=$notificationContent");
        exit();
    } elseif (isset($_POST['action']) && $_POST['action'] == 'scheduleAnnouncement') {
        $title = $_POST['announcementTitle'];
        $content = $_POST['announcementContent'];
        $scheduledDate = $_POST['scheduledDate'];

        // Insert announcement into the database
        $sql = "INSERT INTO Notifications (type, content, scheduled_date) VALUES ('Announcement', '$title: $content', '$scheduledDate')";
        $mysqli->query($sql);

        header("Location: admin_noti.php");
        exit();
    }
}

// Retrieve notifications and announcements from the database
$sql = "SELECT * FROM Notifications ORDER BY created_at DESC";
$result = $mysqli->query($sql);

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

// Close the database connection
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_noti.css">
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
            <a href="admin_report.php">
            <i class='bx bx-pie-chart-alt icon'></i>
            <span class="text nav-text">Analytics</span>
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

    <h1>Communication Tools</h1>

    <!-- Notification Section -->
    <h2>Send Notification</h2>
    <form action="admin_noti.php" method="post">
        <label for="notificationContent">Notification Content:</label>
        <textarea name="notificationContent" rows="3" required></textarea>
        <input type="hidden" name="action" value="sendNotification">
        <button type="submit">Send Notification</button>
    </form>

    <!-- Announcement Section -->
    <h2>Announcement Management</h2>
    <form action="admin_noti.php" method="post">
        <label for="announcementTitle">Announcement Title:</label>
        <input type="text" name="announcementTitle" required>
        <label for="announcementContent">Announcement Content:</label>
        <textarea name="announcementContent" rows="5" required></textarea>
        <label for="scheduledDate">Scheduled Date and Time:</label>
        <input type="datetime-local" name="scheduledDate" required>
        <input type="hidden" name="action" value="scheduleAnnouncement">
        <button type="submit">Schedule Announcement</button>
    </form>

    <ul>
       <?php
    // Check if notification content is present in the URL parameters
    if (isset($_GET['notificationContent'])) {
        echo "<p>Notification: {$_GET['notificationContent']}</p>";
    }

    // Display announcements
    if (!empty($announcements)) {
        echo "<h2>Announcements</h2>";
        echo "<ul>";
        foreach ($announcements as $announcement) {
            echo "<li>";
            echo "<strong>{$announcement['title']}</strong>";
            echo "<p>{$announcement['content']}</p>";
            echo "<p>Scheduled Date: {$announcement['scheduledDate']}</p>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No announcements available.</p>";
    }
    ?>
    </ul>
</body>
</html>
 