<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PureGYM</title>
        
        <link rel = "stylesheet" type = "text/css" href = "sign_up.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    <body>

        <?php
      
       
        ?>
        
        <header>
            
            <div class="logo">
                <img src="logo.png" style="width: 120px; height: 120px; margin-left: 70px;">
                <h1 style="font-size:300%; margin-top: -90px; margin-left: 230px;">PureGYM</h1>
            </div>
            
        </header>
        <br><br><br>
        <center><h1> Sign Up Page </h1></center>
        <form id="signupForm">
            <div class="user">
                <center><img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-vert.png" style="width: 150px; height: 150px;"></center>
            </div>
            <br>
            
            <p>Please fill in this form to create an account.</p>
            
            <div class="container">   
                <label>Full Name : </label>   
                <input type="text" placeholder="Enter Fullname" name="fullname" required>  
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="email" required>
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <label>Re-enter Password : </label>   
                <input type="password" placeholder="Re-enter Password" name="password_rpt" required>  
                
                <input type="checkbox" id="agreeCheckbox" required> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                <br><br>
                <button type="button" onclick="validateAndRedirect()">Sign Up</button>   
            </div> 
        </form>
        
        <script>
            function validateAndRedirect() {
                // Get form inputs
                var fullname = document.forms['signupForm']['fullname'].value;
                var email = document.forms['signupForm']['email'].value;
                var password = document.forms['signupForm']['password'].value;
                var password_rpt = document.forms['signupForm']['password_rpt'].value;
                var agreeCheckbox = document.getElementById('agreeCheckbox');
                
                // Perform validation (you can add more specific validation rules)
                if (fullname === '' || email === '' || password === '' || password_rpt === '') {
                    alert('Please fill in all required fields.');
                } else if (password !== password_rpt) {
                    alert('Passwords do not match.');
                } else if (!agreeCheckbox.checked) {
                    alert('Please agree to the Terms & Privacy.');
                } else {
                    // Redirect to the homepage if validation passes
                    window.location.href = 'homepage.php';
                }
            }
        </script>
        
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="homepage">
            Back to <a href = "homepage.php" id="hp">Homepage</a>
        </div>
        
        <br><br>
        <footer>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
            <p>&copy; 2023 PureGYM</p>
            
        </footer>
    </body>
</html>
