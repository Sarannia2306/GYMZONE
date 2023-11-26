<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CrossFit Zone</title>
        
        
        <link rel = "stylesheet" type = "text/css" href = "User_details.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
    </head>
    <body>
        
        <header>
            
            <div class="logo">
                <img src="logo.png" style="width: 120px; height: 120px; margin-left: 70px;">
                <h1 style="font-size:300%; margin-top: -90px; margin-left: 230px;">CrossFit Zone</h1>
            </div>
            
        </header>
        <br><br><br>
        <center><h1> User Details </h1></center>
        <form id="userDetailsForm">
            <div class="user">
                <center><img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-vert.png" style="width: 150px; height: 150px;"></center>
            </div>
            <br>
            
            <h3 style="text-align:center">Please fill in the details below:</h3>
           
            <div class="container">
                <label>Country: </label>
                <input type="text" placeholder="Enter country" name="country" required>
                <label>Age: </label>
                <input type="number" placeholder="Enter age" name="age" required>
                <label>Gender: </label>
                <input type="checkbox" id="genderCheckbox">
                <label for="genderCheckbox">Male</label>
                <input type="checkbox" id="genderCheckbox">
                <label for="genderCheckbox">Female</label>
                <input type="checkbox" id="genderCheckbox">
                <label for="genderCheckbox">Other</label>
                <br><br>
                <label>Height (cm):</label>
               <input type="number" placeholder="Enter height" name="height" onchange="setTwoNumberDecimal" value="0.00" required>
                <label>Weight (kg):</label>
                <input type="number" placeholder="Enter weight" name="weight" onchange="setTwoNumberDecimal" value="0.00" required>
                <button type="submit"><b>Submit</b></button>
            </div>
        </form>
           
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="homepage">
            Back to <a href = "homepage.php" id="hp">Homepage</a>
        </div>
        
        <script>
                   function validateAndRedirect() {
                       // Get form inputs
                       var fullname = document.forms['userDetailsForm']['country'].value;
                       var email = document.forms['userDetailsForm']['age'].value;
                       var password = document.forms['userDetailsForm']['gender'].value;
                       var password = document.forms['userDetailsForm']['height'].value;
                       var password = document.forms['userDetailsForm']['weight'].value;
                       var agreeCheckbox = document.getElementById('genderCheckbox');

                        // Perform validation (you can add more specific validation rules)
                       if (country === '' || age === '' || gender === '' || height === ''|| weight === '') {
                           alert('Please fill in all required fields.');
                        } else if (!genderCheckbox.checked) {
                           alert('Please select your gender.');
                       } else if (!agreeCheckbox.checked) {
                           alert('Please agree to the Terms & Privacy.');
                       } else {
                           // Redirect to the homepage if validation passes
                           window.location.href = 'homepage.php';
                       }
                   }
                   
                    function setTwoNumberDecimal() {
                        this.value = parseFloat(this.value).toFixed(2);
                   }
</script>

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
</body>
