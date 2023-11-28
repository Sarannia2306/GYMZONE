<?php
// Connect to the database and retrieve notifications
$mysqli = new mysqli('localhost', 'root', '', 'fitnessdb');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

//Fetch notifications and announcements
$sql = "SELECT * FROM notifications ORDER BY created_at DESC"; 
$result = $mysqli->query($sql);

if (!$result) {
    die("Error: " . $mysqli->error);
}

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

$mysqli->close();

$hasNotifications = !empty($notifications);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM Zone Notification</title>
    <link rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<style>
{
@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
}

body {
    font-family: "Roboto", sans-serif;
    background: #EFF1F3;
    min-height: 100vh;
    position: relative;
}

.section-50 {
    padding: 50px 0;
}

.m-b-50 {
    margin-bottom: 50px;
}

.dark-link {
    color: #333;
}

.heading-line {
    position: relative;
    padding-bottom: 5px;
}

.heading-line:after {
    content: "";
    height: 4px;
    width: 75px;
    background-color: #29B6F6;
    position: absolute;
    bottom: 0;
    left: 0;
}

.notification-ui_dd-content {
    margin-bottom: 30px;
}

.notification-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 7px;
    background: #fff;
    -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
}

.notification-list--unread {
    border-left: 2px solid #29B6F6;
}

.notification-list .notification-list_content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.notification-list .notification-list_content .notification-list_img img {
    height: 48px;
    width: 48px;
    border-radius: 50px;
    margin-right: 20px;
}

.notification-list .notification-list_content .notification-list_detail p {
    margin-bottom: 5px;
    line-height: 1.2;
}

.notification-list .notification-list_feature-img img {
    height: 48px;
    width: 48px;
    border-radius: 5px;
    margin-left: 20px;
}

</style>
<body>

    
    <header>
        <a href="homepage.php" id="logo"><img src="gymZONE.jpg" style="width: 100px; height: 85px;"></a>
                
<?php if ($hasNotifications): ?>
    <section class="section-50">
        <div class="container">
            <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>

            <div class="notification-ui_dd-content">
                <?php foreach ($notifications as $notification): ?>
                    <div class="notification-list <?php echo ($notification['type'] == 'Announcement') ? 'notification-list--unread' : ''; ?>">
                        <div class="notification-list_content">
                           
                            <div class="notification-list_detail">
                                <?php if ($notification['type'] == 'Notification'): ?>
                                    <p> <?php echo $notification['content']; ?></p>
                                <?php elseif ($notification['type'] == 'Announcement'): ?>
                                    <h4><b>Announcement</b></h4>
                                    <p><?php echo $notification['content']; ?></p>
                                    <?php if (!empty($notification['scheduled_date'])): ?>
                                        <p>Scheduled Date: <?php echo date('Y-m-d H:i:s', strtotime($notification['scheduled_date'])); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <p class="text-muted"><small><?php echo date('Y-m-d H:i:s', strtotime($notification['created_at'])); ?></small></p>
                            </div>
                        </div>
 
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php else: ?>
    <p>No notifications available.</p>
<?php endif; ?>



    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>


</body>

</html>
