<?php
// Include database connection logic here

$status = ''; // Initialize the status variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    // Insert feedback into the database
    $pdo = new PDO("mysql:host=localhost;dbname=fitnessdb", "root", "");
    $sql = "INSERT INTO feedbacks (fullname, email, phone_number, message) VALUES (:fullname, :email, :phone_number, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        $status = 'success'; // Set status to success if the form is submitted successfully
    } else {
        $status = 'error'; // Set status to error if there is an issue submitting the form
    }
}
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GYM Zone</title>

        <link rel="stylesheet" type="text/css" href="contact.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body>
        
          <header>
                <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
                <div id="navbar-right">
                    <a class="active" href="classes.php">CLASSES</a>
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
                    <a href="notification.php">NOTIFICATIONS</a>
                </div>

            </div>

      <div class="container">
    <div class="row">
        <h1>Contact Us</h1>
    </div>
    <div class="row">
        <h4 style="text-align:center">Would love to hear from you!</h4>
    </div>
    <div class="row input-container">
        <form action="contact.php" method="post">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" name="name" required />
                    <label>Name</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="text" name="email" required />
                    <label>Email</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" name="phone_number" required />
                    <label>Phone Number</label> 
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea name="message" required></textarea>
                    <label>Message</label>
                </div>
            </div>
            <div class="col-xs-12">
                <button type="submit" class="btn-lrg submit-btn">Send Message</button>
            </div>
            <div id="successModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <p>Feedback sent successfully!</p>
                </div>
            </div>
        </form>
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
                // Display the modal if the status is 'success'
                       window.onload = function () {
                           <?php if ($status === 'success'): ?>
                               openModal();
                           <?php endif; ?>
                       };

                       // Open the modal
                       function openModal() {
                           document.getElementById('successModal').style.display = 'block';
                       }

                       // Close the modal
                       function closeModal() {
                           document.getElementById('successModal').style.display = 'none';
                       }
            </script>

    </body>
</html>