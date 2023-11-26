<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GYM Zone - About Us</title>

        <link rel="stylesheet" type="text/css" href="about.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://js.stripe.com/v3/" async></script>
        
          <style>
              
              .video-container {
            width: 40%;
            float: right; /* Float the video container to the right */
            margin-top: 20px;
            margin-right: 20px; /* Add margin to create space between the table and video */
        }

        /* Style for the video itself */
        video {
            width: 100%;
            height: auto;
        }
              
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
            margin: 10px auto; 
            color: #f01e2c; 
            float: left;
        }

        th, td {
            border: 1px solid #f01e2c;
            padding: 10px;
            text-align: center;
            font-size: 20px;
           
        }

        th {
            background-color: #f01e2c;
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
                <a class="active" href="classes.php">CLASSES</a>
                <a href="contact.php">CONTACT</a>
                <a href="sign_up.php">JOIN NOW</a>
                <a href="BMI.html">BMI</a>
                <span class="nav-icon" onclick="openNav()">&#9776;</span>

            </div>
        </header>
        <br><br><br>  <br><br><br>  <br><br><br> 
        
      
        
     <div class="osText " >OUR STORY</div>
    <br><br><br>  <br><br><br>  <br><br><br> <br><br><br> <br><br><br>
    
     <div class="main-content">
    <div class="table-container">
        <table>
            <tr>
                <td>
                    <h2>GYMZONE</h2>
                    <br>
                    <p>Welcome to GymZone – where strength meets community, and fitness transforms into a lifestyle. Our story begins with a passion for empowering individuals to embark on their journey to a healthier, stronger, and happier version of themselves.

                        Founded in 2023, </p><p>GymZone was born out of a shared vision among fitness enthusiasts who believed that a gym should be more than just a place to work out; it should be a hub for inspiration, motivation, and transformation. We understand that everyone's fitness journey is unique, and we are here to support you every step of the way.

Our state-of-the-art facility is more than just equipment; it's a dynamic space designed to foster a sense of belonging.</p> From the moment you walk through our doors, you'll feel the energy and enthusiasm that defines the GymZone experience. We believe in creating a welcoming environment where individuals of all fitness levels can thrive, whether you're a seasoned athlete or just starting your fitness journey.

At GymZone, we pride ourselves on our team of certified and passionate trainers who are dedicated to helping you reach your fitness goals.<p>They are not just instructors; they are your partners in wellness, offering personalized guidance, motivation, and expertise to ensure you get the most out of every workout.

    Community is at the heart of what we do.</p> We host regular events, challenges, and workshops to bring our members together, fostering a sense of camaraderie that extends beyond the gym floor. We believe that the support of a like-minded community is a powerful catalyst for success.

Our commitment to excellence extends to the equipment and amenities we provide. <p>From cutting-edge workout machines to carefully curated classes, we strive to offer a diverse range of options to keep your fitness routine exciting and effective. Our goal is to make every visit to GymZone an experience that leaves you energized and eager for more.

    As we continue to grow and evolve, our dedication to providing a premium fitness experience remains unwavering.</p> <p>Whether you're looking to build muscle, improve endurance, or simply enhance your overall well-being, GymZone is the place where your fitness aspirations become a reality.

Join us on this incredible journey towards a healthier, stronger, and more vibrant you. Welcome to GymZone – where the pursuit of fitness is an exhilarating adventure, and you're never alone in reaching your goals.</p>
                    <br><br></td>
            </tr>
        </table>
     </div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br>
         <div class="video-container">
            <video controls>
                <source src="about video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>     <br><br><br><br><br><br><br><br>     <br><br><br><br><br><br><br><br>     <br><br><br><br><br><br><br><br> 
    <br><br><br><br><br><br><br><br>     <br><br><br><br><br><br><br><br>     <br><br><br><br><br><br><br><br>     
                
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

