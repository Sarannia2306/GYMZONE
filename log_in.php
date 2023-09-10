<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PureGYM</title>
        
        <link rel = "stylesheet" type = "text/css" href = "log_in.css"/>
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
        <center><h1> Login Page </h1></center>
        <form id="loginForm">
            <div class="user">
                <center><img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-vert.png" style="width: 150px; height: 150px;"></center>
            </div>
            <br>
            
            <div class="container">   
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="email" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <button type="submit" onclick="validateAndRedirect()">Login</button>   
                <input type="checkbox" id="rememberMe"> Remember me    
                <br><br> Forgot <a href="#"> password</a>?
            </div>   
        </form>
        
        <script>
            // Check if username and password should be remembered
            var rememberMeCheckbox = document.getElementById('rememberMe');
            var loginForm = document.getElementById('loginForm');

            // Function to set username and password in localStorage
            function rememberMe() {
                if (rememberMeCheckbox.checked) {
                    var email = loginForm.elements['email'].value;
                    var password = loginForm.elements['password'].value;
                    localStorage.setItem('rememberedEmail', email);
                    localStorage.setItem('rememberedPassword', password);
                } else {
                    localStorage.removeItem('rememberedEmail');
                    localStorage.removeItem('rememberedPassword');
                }
            }

            // Load remembered values if they exist
            var rememberedEmail = localStorage.getItem('rememberedEmail');
            var rememberedPassword = localStorage.getItem('rememberedPassword');
            if (rememberedEmail && rememberedPassword) {
                loginForm.elements['email'].value = rememberedEmail;
                loginForm.elements['password'].value = rememberedPassword;
                rememberMeCheckbox.checked = true;
            }

            // Attach the "rememberMe" function to the checkbox's change event
            rememberMeCheckbox.addEventListener('change', rememberMe);
            
            function validateAndRedirect() {
                // Get form inputs
                var email = document.forms['loginForm']['email'].value;
                var password = document.forms['loginForm']['password'].value;
                
                // Perform validation (you can add more specific validation rules)
                if (email === '' || password === '') {
                    alert('Please fill in all required fields.');
                } else if (!agreeCheckbox.checked) {
                    alert('Please agree to the Terms & Privacy.');
                } else {
                    // Redirect to the homepage if validation passes
                    window.location.href = 'homepage.php';
                }
            }
        </script>

        <br><br>
        <div class="signup">
            Are you a new user? <a href = "sign_up.php" id="hp">Sign Up</a> Now!
        </div>
        
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
