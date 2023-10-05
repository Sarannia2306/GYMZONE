    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get user input
        $weight = floatval($_POST["weight"]);
        $height = floatval($_POST["height"]) / 100; // Convert height to meters

        // Calculate BMI
        $bmi = $weight / ($height * $height);

        // Display the result
        echo "<h2>Your BMI is: " . number_format($bmi, 2) . "</h2>";
        
        // Interpret the result
        if ($bmi < 18.5) {
            echo "Underweight";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "Normal weight";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo "Overweight";
        } else {
            echo "Obese";
        }
    }
    ?>