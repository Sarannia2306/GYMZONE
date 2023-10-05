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

    <div class="video-container">
        <video autoplay muted loop id="video-bg">
            <source src="hardcore video.mp4" type="video/mp4">
        </video>
        <!-- Content or other elements can be added here -->
    </div>
        
        <br><br><br>
        <center><h1> Sign Up Page </h1></center>
        <form id="signupForm">
            <div class="user">
                <center><img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-vert.png" style="width: 150px; height: 150px;"></center>
            </div>
            <br>
            
            <h3 style="text-align:center">Please fill in this form to create an account</h3>
            
            <div class="container">   
                <label>Full Name : </label>   
                <input type="text" placeholder="Enter Fullname" name="fullname" required>  
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="email" required>
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <label>Re-enter Password : </label>   
                <input type="password" placeholder="Re-enter Password" name="password_rpt" required>  
                
                <input type="checkbox" id="agreeCheckbox" required>
                <label for="agreeCheckbox">By creating an account you agree to our <a href="#" id="termsPrivacyLink">Terms & Privacy</a></label>
                
                <!-- Modal -->
                <div class="modal fade" id="termsPrivacyModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Terms & Privacy</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!-- terms and privacy content here -->
                                <b>Privacy Policy of CrossFit Gym</b>

                                <p>CrossFit Gym operates the <i>http://127.0.0.1:8080/PureGYM/homepage.php</i> website, which provides the SERVICE.</p>

                                <p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the CrossFit Gym website.</p>

                                <p>If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>

                                <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at <i>http://127.0.0.1:8080/PureGYM/homepage.php</i>, unless otherwise defined in this Privacy Policy.</p>

                                <b>Information Collection and Use</b>

                                <p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>

                                <b>Log Data</b>

                                <p>We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.</p>

                                <b>Cookies</b>

                                <p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.</p>

                                <p>Our website uses these "cookies" to collection information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.</p>

                                <b>Service Providers</b>

                                <p>We may employ third-party companies and individuals due to the following reasons:</p>

                                <ul>
                                    <li>To facilitate our Service;</li>
                                    <li>To provide the Service on our behalf;</li>
                                    <li>To perform Service-related services; or</li>
                                    <li>To assist us in analyzing how our Service is used.</li>
                                </ul>

                                <p>We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>

                                <b>Security</b>

                                <p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>

                                <b>Links to Other Sites</b>

                                <p>Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

                                <b>Children's Privacy</b>

                                <p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>

                                <b>Changes to This Privacy Policy</b>

                                <p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>

                                <b>Contact Us</b>

                                <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>

                                <b>Terms and Conditions</b>

                                <b>Welcome to CrossFit Gym!</b>

                                <p>These terms and conditions outline the rules and regulations for the use of CrossFit Gym's Website, located at <i>http://127.0.0.1:8080/PureGYM/homepage.php</i>.</p>

                                <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use CrossFit Gym if you do not agree to take all of the terms and conditions stated on this page.</p>

                                <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions.
                                    "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the 
                                    most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of my. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                                <b>Cookies</b>

                                <p>We employ the use of cookies. By accessing CrossFit Gym, you agreed to use cookies in agreement with the CrossFit Gym's Privacy Policy. </p>

                                <p>Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                                <b>License</b>

                                <p>Unless otherwise stated, CrossFit Gym and/or its licensors own the intellectual property rights for all material on CrossFit Gym. All intellectual property rights are reserved. You may access this from CrossFit Gym for your own personal use subjected to restrictions set in these terms and conditions.</p>

                                <p>You must not:</p>
                                <ul>
                                    <li>Republish material from CrossFit Gym</li>
                                    <li>Reproduce, duplicate or copy material from CrossFit Gym</li>
                                    <li>Redistribute content from CrossFit Gym</li>
                                </ul>

                                <p>This Agreement shall begin on the date hereof.</p>

                                <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. CrossFit Gym does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of CrossFit Gym,its agents and/or affiliates. 
                                    Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, CrossFit Gym shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                                <p>CrossFit Gym reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

                                <p>You warrant and represent that:</p>

                                <ul>
                                    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                                    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                                    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                                </ul>

                                <p>You hereby grant CrossFit Gym a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br><br>
                <button type="button" onclick="validateAndRedirect()" data-bs-toggle="tooltip" title="Hooray!" >Sign Up</button>
                
                
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
            
            $(document).ready(function () {
                const termsPrivacyLink = document.getElementById("termsPrivacyLink");

                termsPrivacyLink.addEventListener("click", function (event) {
                    event.preventDefault();
                    // Open the Bootstrap modal when the link is clicked
                    $("#termsPrivacyModal").modal();
                });
            });
            
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                  return new bootstrap.Tooltip(tooltipTriggerEl)
                })
                
                 function validateAndRedirect() {
                // Get form inputs and perform validation
                // ...

                // Assuming validation passes, you can redirect to another page
                window.location.href = 'User_details.p'; // Replace 'anotherpage.html' with the URL of the page you want to link to
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
