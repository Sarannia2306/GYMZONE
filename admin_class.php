<?php

// Handle form submissions for content management
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'addVideo') {
        $title = $_POST['videoTitle'];
        $url = $_POST['videoUrl'];
        // Add logic to save the video information in the database
        // For simplicity, we'll just update the local array
        $workoutVideos[] = ['title' => $title, 'url' => $url];
    } elseif (isset($_POST['action']) && $_POST['action'] == 'updateSchedule') {
        // Add logic to update the class schedule in the database
        // For simplicity, we'll just update the local array
        foreach ($classSchedules as &$schedule) {
            if ($schedule['day'] == $_POST['day']) {
                $schedule['time'] = $_POST['time'];
                $schedule['class'] = $_POST['class'];
                break;
            }
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'addPost') {
        $postTitle = $_POST['postTitle'];
        $postContent = $_POST['postContent'];
        $blogPosts[] = ['title' => $postTitle, 'content' => $postContent];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_class.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <title>Content Management</title>
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

    <h1>Content Management</h1>

    <!-- Workout Videos Section -->
    <h2>Workout Videos</h2>
    <form action="admin.php" method="post">
        <label for="videoTitle">Video Title:</label>
        <input type="text" name="videoTitle" required>
        <label for="videoUrl">Video URL:</label>
        <input type="url" name="videoUrl" required>
        <input type="hidden" name="action" value="addVideo">
        <button type="submit">Add Video</button>
    </form>

    <!-- Class Schedules Section -->
    <h2>Class Schedules</h2>
    <form action="admin.php" method="post">
        <label for="day">Day:</label>
        <input type="text" name="day" required>
        <label for="time">Time:</label>
        <input type="text" name="time" required>
        <label for="class">Class:</label>
        <input type="text" name="class" required>
        <input type="hidden" name="action" value="updateSchedule">
        <button type="submit">Update Schedule</button>
    </form>

    <!-- Blog Posts Section -->
    <h2>Blog Posts</h2>
    <form action="admin.php" method="post">
        <label for="postTitle">Post Title:</label>
        <input type="text" name="postTitle" required>
        <label for="postContent">Post Content:</label>
        <textarea name="postContent" rows="4" required></textarea>
        <input type="hidden" name="action" value="addPost">
        <button type="submit">Add Post</button>
    </form>
    
</body>
</html>
