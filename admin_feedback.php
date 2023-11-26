<?php
// Database connection details
$dsn = "mysql:host=localhost;dbname=fitnessdb";
$username = "root";
$password = "";

// Simulating database connection and query for user data
try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare("SELECT * FROM feedbacks"); // Assuming your feedback table is named 'feedbacks'
    $stmt->execute();
    $userFeedback = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Handle form submissions for feedback
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'respondToFeedback') {
        // Add logic to respond to user feedback (e.g., send an email, store response in the database, etc.)
        // For simplicity, we'll just display a success message
        echo "Response sent successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_feedback.css">
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

<div class="feedback-container">
        <h1>Feedback and Support</h1>

        <ul class="feedback-list">
            <?php foreach ($userFeedback as $feedback): ?>
                <li>
                    <strong>Name: <?= $feedback['fullname'] ?></strong>
                    <p>Email: <?= $feedback['email'] ?></p>
                    <p>Feedback: <?= $feedback['message'] ?></p>
                    <form action="admin_feedback.php" method="post">
                        <label for="response">Your Response:</label>
                        <textarea name="response" rows="3" required></textarea>
                        <!-- Add a unique identifier, such as the feedback ID -->
                        <input type="hidden" name="feedbackId" value="<?= $feedback['id'] ?>">
                        <input type="hidden" name="action" value="respondToFeedback">
                        <button type="submit">Send Response</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
         </div>

  
</body>
</html>
