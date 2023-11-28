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
$sql = "SELECT day, time_slot FROM pilates_class_schedule";
$result = $conn->query($sql);

// Initialize the booking message variable
$bookingMessage = '';

// Handle booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['day']) && isset($_POST['time_slot'])) {
        $day = $_POST['day'];
        $timeSlot = $_POST['time_slot'];

        // Insert booking data into the bookings table without 'id'
        $insertSql = "INSERT INTO bookings (day, time_slot) VALUES ('$day', '$timeSlot')";
        if ($conn->query($insertSql) === TRUE) {
            $bookingMessage = "Class has been booked successfully! You have booked $day at $timeSlot.";
        } else {
            $bookingMessage = "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}



// Fetch schedule data from the database
$sql = "SELECT day, time_slot FROM pilates_class_schedule";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardcore Class Schedule</title>
    <link rel="stylesheet" type="text/css" href="pilates_class.css"/>
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
        .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    
    </style>
</head>

<body>
    <br><br><br>
     <button onclick="window.location.href='homepage.php'">Go to Homepage</button>
    
    <?php if ($result->num_rows > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Why wait</th>
                </tr>
            </thead>
            <tbody>
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
                    <button type="button" onclick="openModal('<?php echo $row['day']; ?>', '<?php echo $row['time_slot']; ?>')">Join</button>
                </form>
            </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
     <?php if (!empty($bookingMessage)) : ?>
    <div style="color: #f01e2c; text-align: center; margin-top: 20px;">
        <?php echo $bookingMessage; ?>
    </div>
    <?php endif; ?>
    <?php else : ?>
        <p>No schedule data found.</p>
    <?php endif; ?>

   <?php
if ($conn instanceof mysqli && $conn->ping()) {
    $conn->close();
}
?>

        
        <!-- Modal -->
<div id="joinModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Are you ready to join this class?</p>
        <form method="post" action="">
            <input type="hidden" name="day" id="modalDay" value="">
            <input type="hidden" name="time_slot" id="modalTimeSlot" value="">
            <button type="submit">Yes, Join</button>
        </form>
    </div>
</div>

<script>
    // Function to open the modal
    function openModal(day, timeSlot) {
        document.getElementById('modalDay').value = day;
        document.getElementById('modalTimeSlot').value = timeSlot;
        document.getElementById('joinModal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('joinModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function (event) {
        var modal = document.getElementById('joinModal');
        if (event.target == modal) {
            closeModal();
        }
    };
</script>


</body>

</html>
