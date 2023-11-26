<?php
//database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnessdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch schedule data from the database
$sql = "SELECT day, time_slot FROM yoga_class_schedule";
$result = $conn->query($sql);

// Handle booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['day']) && isset($_POST['time_slot'])) {
        $day = $_POST['day'];
        $timeSlot = $_POST['time_slot'];

        // Implement your booking logic here
        // You can insert the booking details into a bookings table or perform any other desired actions

        // For demonstration purposes, let's just print a message
        echo "Booking successful! You have booked $day at $timeSlot.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Class Schedule</title>
    <link rel="stylesheet" type="text/css" href="yoga_class.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin: 20px auto; 
            color: white; 
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

        form {
            margin-top: 20px;
        }
        
        button {
            background-color: transparent;
            color: #f01e2c;
            border: 2px solid #f01e2c;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #f01e2c;
            color: white;
        }
            </style>
</head>

<body>

    <?php if ($result->num_rows > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['day']; ?></td>
                        <td><?php echo $row['time_slot']; ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="day" value="<?php echo $row['day']; ?>">
                                <input type="hidden" name="time_slot" value="<?php echo $row['time_slot']; ?>">
                                <button type="submit">Book</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No schedule data found.</p>
    <?php endif; ?>

    <?php
    // Close the database connection
    $conn->close();
    ?>

</body>

</html>
