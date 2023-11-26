<?php
require 'vendor/autoload.php'; // Include necessary libraries

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

function registerUser($email, $password) {
    // Firebase configuration
    $firebase = (new Factory)
        ->withServiceAccount(ServiceAccount::fromJsonFile(__DIR__.'/path/to/firebase_credentials.json'))
        ->create();

    $auth = $firebase->getAuth();

    // Firebase user authentication
    try {
        $user = $auth->createUserWithEmailAndPassword($email, $password);
        $uid = $user->uid;
        // You can use $uid to associate Firebase user ID with your local user database
        return "User registered successfully";
    } catch (\Kreait\Firebase\Exception\Auth\EmailExists $e) {
        // Handle existing email address
        return "Email already exists";
    } catch (\Exception $e) {
        // Handle other authentication errors
        return "Error: " . $e->getMessage();
    }
}

// Process user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... your existing code ...

    $email = $_POST['email'];
    $password = $_POST['password'];

    $registrationResult = registerUser($email, $password);
    echo $registrationResult;

    // ... your existing code ...
    // Close the database connection if necessary
}
?>
