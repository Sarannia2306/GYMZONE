<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GYM Zone</title>

        <link rel="stylesheet" type="text/css" href="homepage.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Add this in the <head> section of your HTML -->
       
        <style>
        body {
            background-color: #000; /* Set the background color */
            margin: 0;
            padding: 0;
        }

        /* Style for the background image */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Place the image behind the content */
            opacity: 0.5; /* Adjust the opacity as needed */
        }
        </style>

    </head>
    <body>

 <div class="header-container">
        <header>
            <div id="navbar">                
                <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
                <div id="navbar-right">
                    <a class="active" href="classes.php">CLASSES</a>
                    <a href="contact.php">CONTACT</a>
                    <a href="sign_up.php">JOIN NOW</a>
                    <a href="BMI.html">BMI</a>
            <!-- Use any element to open/show the overlay navigation menu -->
            <span onclick="openNav()">&#9776;</span>
            
                </div>
            </div>
        </header>
     
          <!-- Slideshow container -->
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <img src="h1.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="h2.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="h3.jpg" style="width:100%">
              </div>

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            
            <div>
                <img src="black bg.jpg" alt="Image" class="img1">              
            </div>

          
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
           
           
            //slideshow
             let slideIndex = 1;
               showSlides(slideIndex);

             // Next/previous controls
             function plusSlides(n) {
               showSlides(slideIndex += n);
             }

             // Thumbnail image controls
             function currentSlide(n) {
               showSlides(slideIndex = n);
             }

             function showSlides(n) {
               let i;
               let slides = document.getElementsByClassName("mySlides");
               let dots = document.getElementsByClassName("dot");
               if (n > slides.length) {slideIndex = 1}
               if (n < 1) {slideIndex = slides.length}
               for (i = 0; i < slides.length; i++) {
                 slides[i].style.display = "none";
               }
               for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" active", "");
               }
               slides[slideIndex-1].style.display = "block";
               dots[slideIndex-1].className += " active";
             }
                   
        </script>
        
<footer>
    <div class="image-container">
        <img src="bottom.jpg" alt="Image" class="img4">
        <div class="overlay">
            <div class="overlay-content">
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
                <p>&copy; 2023 GYM Zone</p>
            </div>
        </div>
    </div>
</footer>


    </body>
</html>
