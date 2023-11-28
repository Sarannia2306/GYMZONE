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
body {
 background-color: #000; /* Set the background color black */
 margin: 0;
 padding: 0;
 height: 100%;
 width: 100%;
 color: #fff;
 }

 /* Container for the header and image */
 .header-container {
 position: relative;
 }

 /* Style for the header */
 header {
 position: fixed; /* Position the header as fixed */
 top: 0; /* At the top of the viewport */
 left: 0;
 width: 100%; /* Take the full width of the viewport */
 background-color: transparent;
 }

 /* Style the navigation bar */
 #navbar {
 background-color: rgba(0, 0, 0, 0);
 z-index: 11; /* Ensure the navigation bar is above */
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

 /*background color on hover */
 #navbar-right a:hover {
 background-color: rgba(255, 0, 0, 0.5); /* New background color on hover */
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

 /* The navigation links inside the overlay */
 .overlay a {
 padding: 8px;
 text-decoration: none;
 font-size: 36px;
 color: #fff;
 display: block; /* Display block instead of inline */
 transition: 0.3s; /* Transition effects on hover (color) */
 }

 /* Position the content inside the overlay */
 .overlay-content {
 position: relative;
 top: 25%; /* 25% from the top */
 width: 100%; /* 100% width */
 text-align: center; /* Centered text/links */
 margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
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
 
 /* The Overlay (background) */
 .overlay {
 /* Height & width depends on how you want to reveal the overlay (see JS below) */   
 height: 100%;
 width: 0;
 position: fixed; /* Stay in place */
 z-index: 1; /* Sit on top */
 left: 0;
 top: 0;
 background-color: rgb(0,0,0); /* Black fallback color */
 background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
 overflow-x: hidden; /* Disable horizontal scroll */
 transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
 }

 /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
 @media screen and (max-height: 450px) {
 .overlay a {font-size: 20px}
 .overlay .closebtn {
 font-size: 40px;
 top: 15px;
 right: 35px;
 }
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
 background-color: #f01e2c; /* red background color */
 color: #fff; /* White text color */
 padding: 5px 0; /* Add padding top and bottom */
 text-align: center; /* Center-align the content */
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

.closebtn{
    font-size: 70px;
}

span[onclick="openNav()"] {
    font-size: 4vh; /* Adjust the font size as needed */
}

.osText{
  text-align:center;
    -webkit-text-stroke:3px #f01e2c;
    position:relative;
    text-transform:uppercase;
    color: #252527;
    font-size: 15vw;
    letter-spacing: 1.2vw;
    font-weight: 500;
    text-shadow:
        
        /*text stroke around letters*/
        0 1px 0 lighten(#252527,17%),
        -1px -1px 0 lighten(#252527,17%), 
        
        /*main 3d shadow*/
        -1px 0px 0 lighten(#252527,6%), 
        -2px 1px 0 lighten(#252527,6%), 
        -3px 2px 0 lighten(#252527,5%), 
        -4px 3px 0 lighten(#252527,4%), 
        -5px 4px 0 lighten(#252527,3%), 
        -6px 5px 0 lighten(#252527,2%), 
        -7px 6px 0 lighten(#252527,1%), 
        -8px 7px 0 #252527, 
        -9px 8px 0 darken(#252527,1%), 
        -10px 9px 0 darken(#252527,2%), 
        -11px 10px 0 darken(#252527,3%), 
        -12px 11px 0 darken(#252527,4%), 
        -13px 12px 0 darken(#252527,5%), 
        -14px 13px 0 darken(#252527,6%), 
        -15px 14px 0 darken(#252527,7%), 
        -16px 15px 0 darken(#252527,8%),
        
        /*top right*/
        0 -1px 1px white,
        0 -2px 0px white,        
        
        /*bottom left corner*/
        -15px 14px 0px white,
        -16px 15px 0px white,
        -17px 16px 0px white,
        -18px 17px 0px white,
        
        
        -2px -1px 0 white,
        -3px -0px 0 white,
        
        /*top left corner*/
        -19px 15px 0 white,
        -18px 14px 0 white,
        -17px 13px 0 white,
        -16px 12px 0 white,
        -15px 11px 0 white,
        -14px 10px 0 white,
        -13px 9px 0 white,
        -12px 8px 0 white,
        -11px 7px 0 white,
        -10px 6px 0 white,
        -9px 5px 0 white,
        -8px 4px 0 white,
        -7px 3px 0 white,
        -6px 2px 0 white,
        -5px 1px 0 white,
        -4px 0px 0 white,
        
        /*lower right / (upper right side for capital T like H etc letters. */ 
        0px 2px 0px white,
        -1px 3px 0px white,
        -2px 4px 0px white,
        -3px 5px 0px white,
        -4px 6px 0px white,
        -5px 7px 0px white, 
        -6px 8px 0px white, 
        -7px 9px 0px white, 
        -8px 10px 0px white, 
        -9px 11px 0px white, 
        -10px 12px 0px white, 
        -11px 13px 0px white, 
        -12px 14px 0px white, 
        -13px 15px 0px white,
        -14px 16px 0px white,
        -15px 17px 0px white;
  
}



.table-container {
    display: flex;
    justify-content: center;
    padding: 10px;
}

table {
    border-collapse: collapse;
    width: 700px;
    margin: 10px;
    background-color: black; /* Set the background color to black */
    border: 3px solid red; /* Set the outline color to red */
    color: white; /* Set the text color to white */
    font-size: 24px;
}

td {
    height: 400px;
}

table,
th,
td {
    border: 3px solid red; /* Set the cell borders to red */
    text-align: center;
}

h2 {
    text-align: center;
}

th,
td {
    padding: 10px;
}

 .video-container {
width: 40%;
float: right; /* Float the video container to the right */
margin-top: 680px;
margin-right: 20px; /* Add margin to create space between the table and video */
}

/* Style for the video itself */
video {
width: 100%;
height: auto;
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

