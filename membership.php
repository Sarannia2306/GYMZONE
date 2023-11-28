<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM Zone - Membership</title>
    <link rel="stylesheet" type="text/css" href="membership.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <script src="https://js.stripe.com/v3/" async></script>

    <style>

            .image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80vh;
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

            .header-image {
                max-width: 100%;
                max-height: 100%;
            }
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .main-content {
                background-color: #000; /* Set the background color black */
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap; /* Change to wrap to allow items to flow to the next row */
                justify-content: center;
                align-content: center; /* Center vertically by aligning content */
            }
            footer {
               background-color: #ff4d58;
                color: white;
                padding: 10px 0;
                text-align: center;
                font-size: 15px;
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

           
    </style>
</head>
<body>

<header>
    <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
    <div id="navbar-right">
        <a href="contact.php">CONTACT</a>
        <a href="sign_up.php">JOIN NOW</a>
        <a href="BMI.html">BMI</a>
        <span class="nav-icon" onclick="openNav()">&#9776;</span>
    </div>
</header>
    <br><br><br><br>

<div class="main-content">
    <div class="table-container">
        <table>
            <tr>
                <th>Monthly Membership </th>
            </tr>
            <tr>
                <td>
                    <h2>3-6 Months</h2>
                    <br>
                    <p>Monthly membership is like trial package where you get to try our Virtual Gym for few months.</p>
                    <br>
                    <button type="button" class="btn btn-outline-danger" onclick="redirectToMonthly()">Monthly</button></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Annual Membership </th>
            </tr>
            <tr>
                <td>
                    <h2>2 Year</h2>
                    <br>
                    <p>Enjoy our Premium Membership with our 1 Year plan. We hope to give our utmost service through virtual</p>
                    <br>
                    <button type="button" class="btn btn-outline-danger"onclick="redirectToAnnual()">Annually</button></td>
            </tr>
        </table>
    </div>
</div>
          
        <!-- The overlay -->
        <div id="myNav" class="overlay">
            
            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="about.php">OUR STORY</a>
                <a href="testimonial.php">TESTIMONIAL</a>
                <a href="log_in.php">LOG IN</a>
                <a href="notification.php">NOTIFICATIONS</a>
            </div>

        </div>
        
        <script>

         
            /* Open when someone clicks on the span element */
           function openNav() {
             document.getElementById("myNav").style.width = "100%";
           }

           /* Close when someone clicks on the "x" symbol inside the overlay */
           function closeNav() {
             document.getElementById("myNav").style.width = "0%";
           }
           
           function redirectToMonthly() {
            window.location.href = "monthly.php";
            }
            
             function redirectToAnnual() {
            window.location.href = "annual.php";
            }

        </script>
        
  <div class="mark">
            <div class="zone">
                <?php
                // Number of times to repeat the text
                $numberOfTimes = 15;

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
