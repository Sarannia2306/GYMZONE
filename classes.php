<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>

    <link rel="stylesheet" type="text/css" href="classes.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 
     <body>
        
        <header>
            <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
            <div id="navbar-right">
                <a href="contact.php">CONTACT</a>
                <a href="register.php">JOIN NOW</a>
                <a href="BMI.html">BMI</a>
                <span class="nav-icon" onclick="openNav()">&#9776;</span>
            </div>
            
        </header>
         
        <!-- The overlay -->
        <div id="myNav" class="overlay">
            
            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="about.php">OUR STORY</a>
                <a href="membership.php">MEMBERSHIP</a>
                <a href="testimonial.php">TESTIMONIAL</a>
                <a href="log_in.php">LOG IN</a>
                <a href="notification.php">NOTIFICATIONS</a>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="row">
        <div class="column">
            <div class="class-card">
                <img src="hardcore.gif" alt="Hardcore"/>
                <h2><a href="hardcore_class.php">HARDCORE</a></h2>
            </div>
     </div>     

    <div class="column">
        <div class="class-card">
            <img src="yoga.jpg" alt="Yoga"/>
            <h2><a href="yoga_class.php">YOGA</a></h2>
        </div>
    </div>

    <div class="column">
        <div class="class-card">
            <img src="cardio.gif" alt="Cardio"/>
            <h2><a href="cardio_class.php">CARDIO</a></h2>
        </div>
    </div>

    <div class="column">
        <div class="class-card">
            <img src="pilates.gif" alt="Pilates"/>
           <h2><a href="pilates_class.php">PILATES</a></h2>
        </div>
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
           
            function handleButtonClick(className) {
            alert("You clicked on " + className);
            // Add your logic here to handle the button click
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