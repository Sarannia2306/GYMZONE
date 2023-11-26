<?php
// Connect to the database and retrieve notifications
$mysqli = new mysqli('localhost', 'root', '', 'fitnessdb');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch notifications and announcements
$sql = "SELECT * FROM notifications ORDER BY created_at DESC"; // You might want to add a LIMIT or filter by user
$result = $mysqli->query($sql);

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

$mysqli->close();

$hasNotifications = !empty($notifications);
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GYM Zone Notification</title>

        <link rel="stylesheet" type="text/css" href="notification.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        </head> 
        
        <header>
            <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
            <div id="navbar-right">
                <a class="active" href="classes.php">CLASSES</a>
                <a href="contact.php">CONTACT</a>
                <a href="register.php">JOIN NOW</a>
                <a href="BMI.html">BMI</a>
                <span class="nav-icon" onclick="openNav()">&#9776;</span>
            </div>
        </header>
        
        <style>
            /* Style for the header */
            header {
            position: fixed; /* Position the header as fixed */
            top: 0; /* At the top of the viewport */
            left: 0;
            width: 100%; /* Take the full width of the viewport */
            background-color: rgba(0, 0, 0, 0);
            }

            /* Style the navigation bar */
            #navbar {
            background-color: rgba(0, 0, 0, 0);
            z-index: 10; /* Ensure the navigation bar is above */
            }

            /* Style for the logo */
            #logo {
            text-decoration: none;
            color: none;
            font-size: 50px;
            }

            #navbar-right {
            text-align: right;
            color:#fff;
            }

            /* Style for the navigation links */
            #navbar-right a {
            text-decoration: none;
            font-size: 20px;
            margin-right: 20px; /* Adjust the margin as needed */
            color: #fff;
            background-color: rgba(0, 0, 0, 5); /* Background color with opacity */
            border-radius: 3px; /* Rounded corners for the background */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
            }

            /*background color on hover */
            #navbar-right a:hover {
            background-color: rgba(255, 0, 0, 0.5); /* New background color on hover */
            }

            .mark{
            width: auto;
            animation-name: zone;
            animation-duration: 3s;
            animation-delay: 0s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-fill-mode: backwards
            }

            .mark {
            position: fixed;
            bottom: 150px; /* Adjust the distance from the bottom (same as the height of the footer) */
            left: 0;
            width: 100%;
            background-color: #f01e2c;
            color: #fff;
            text-align: center;
            padding: 10px;
            z-index: 900; /* Ensure it's above the footer */
            }

            .bold-text {
            font-weight: bold;
            }

            /* Style the .zone container inside .mark */
            .zone {
            margin: 0 auto; /* Center-align .zone within .mark */
            }

            /* Style the spans inside .zone */
            .zone span {
            display: inline-block;
            margin: 6px; /* Add spacing between spans */
            font-size: 20px; /* Adjust font size */
            }

            /* Style hover effect for .mark */
            .mark:hover {
            background-color: #000; /* Black background color */
            color: #f01e2c; /* red text color on hover */
            }

            /* Keyframes for text animation */
            @keyframes textAnimation {
            0% {
            transform: translateX(0);
            }
            100% {
            transform: translateX(-100%);
            }
            }

            /* Apply animation to .zone span */
            .zone span{
            white-space: nowrap; /* Prevent text from wrapping */
            animation: textAnimation 3s linear infinite; /* Adjust animation duration as needed */
            display: inline-block;
            padding-right: 0px; /* Add spacing between repeated text */
            }

            /* The navigation links inside the overlay */
            .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #fff;
            display: block; /* Display block instead of inline */
            transition: 0.3s; /* Transition effects on hover (color) */
            }

            /* When you mouse over the navigation links, change their color */
            .overlay a:hover, .overlay a:focus {
            color: #f01e2c; 
            }

            /* Position the close button (top right corner) */
            .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 30px;
            }


            .image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height:70vh;
            }

            .background-color {
                background-color: #000;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1; /* Place it behind the image */
            }
            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: #ff4d58;
                color: white;
                padding: 10px 0;
                text-align: center;
                font-size: 15px;
            }

            body {
                margin-bottom: 60px; /* Adjust the margin to accommodate the fixed footer height */
            }

            .social-icons {
                text-align: center;
                margin-top: 20px;
                color:  #f01e2c;
            }

            .social-icons a {
                display: inline-block;
                margin: 0 15px; /* Adjust the spacing between icons */
                font-size: 30px;
                color: black;
                text-decoration: none;
            }

            .social-icons a:hover {
                color: #fff;
            }
             header {
            position: fixed; /* Position the header as fixed */
            top: 0; /* At the top of the viewport */
            left: 0;
            width: 100%; /* Take the full width of the viewport */
            background-color: rgba(0, 0, 0, 0.5);
            }
            #navbar-right a {
            text-decoration: none;
            font-size: 24px;
            color: #fff;
            margin-right: 20px; /* Adjust the margin as needed */
            background-color: transparent; /* Background color with opacity */
            border-radius: 7px; /* Rounded corners for the background */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
            }
            span.nav-icon {
            font-size: 28px; /* Set the font size as needed */
            cursor: pointer; /* Add a pointer cursor to indicate interactivity */
            color: #fff; /* Set the color of the icon */
            }
           .notification-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f01e2c;
            color: #fff;
            text-align: center;
            padding: 10px;
            }


        </style>

    <body>

        <!-- The overlay -->
        <div id="myNav" class="overlay">
            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="about.php">OUR STORY</a>
                <a href="membership.php">MEMBERSHIP</a>
                <a href="testimonial.php">TESTIMONIAL</a>
                 <?php
               if (isset($_SESSION['user_id'])) {
                   // If user is logged in, display "LOG OUT" and "PROFILE"
                   echo '<a href="log_out.php">LOG OUT</a>';
                   echo '<a href="user_profile.php">PROFILE</a>';
               } else {
                   // If user is not logged in, display "LOG IN"
                   echo '<a href="log_in.php">LOG IN</a>';
               }
               ?>
                <a href="notification.php">NOTIFICATIONS</a>
            </div>

        </div>
        
            <?php
            $hasNotifications = !empty($notifications);
            ?>

            <!-- Display notifications -->
            <?php if ($hasNotifications): ?>
                <div class="notification-container">
                    <h2>Your Notifications</h2>
                    <ul>
                        <?php foreach ($notifications as $notification): ?>
                            <li>
                                <?php
                                if ($notification['type'] == 'Notification') {
                                    echo "Notification: {$notification['content']}";
                                } elseif ($notification['type'] == 'Announcement') {
                                    echo "Announcement: {$notification['content']}";
                                    if (!empty($notification['scheduled_date'])) {
                                        echo "<br>Scheduled Date: {$notification['scheduled_date']}";
                                    }
                                }
                                ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        
        <script>

         
            /* Open when someone clicks on the span element */
           function openNav() {
             document.getElementById("myNav").style.width = "100%";
           }

           /* Close when someone clicks on the "x" symbol inside the overlay */
           function closeNav() {
             document.getElementById("myNav").style.width = "0%";
             }
             
        </script>
        
            <div class="mark">
            <div class="zone">
                <?php
                // Number of times to repeat the text
                $numberOfTimes = 12;

                for ($i = 0; $i < $numberOfTimes; $i++) {
                    // Use a CSS class to style the text as bold
                    echo '<span class="zone bold-text">GYM ZONE</span>';
                }
                ?>
            </div>
         </div>
        <br><br><br><br><br>
<footer>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
            <p>&copy; 2023 GYM Zone</p>   
</footer>



    </body>
</html>
