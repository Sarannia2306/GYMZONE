<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM Zone - Membership</title>
    <link rel="stylesheet" type="text/css" href="membership.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <script src="https://js.stripe.com/v3/" async></script>

    <style>

            .background-color {
                background-color: #000;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1; /* Place it behind the image */
            }

            .header-image {
                max-width: 100%;
                max-height: 100%;
            }
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .main-content {
                background-color: #000; /* Set the background color black */
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap; /* Change to wrap to allow items to flow to the next row */
                justify-content: center;
                align-content: center; /* Center vertically by aligning content */
            }
            
             body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            }
            
            table {
            border-collapse: collapse;
            
            }

            table, th, td {
                border: 3px solid red;
            }

            th, td {
                padding: 15px;
                text-align: center;
            }
            
           .subscribe-btn {
            background-color: #f01e2c;
            color: white;
            padding: 8px;
            cursor: pointer;
            }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>1 Year</th>
        </tr>
        <tr>
            <td>RM125<br><br>
                Enjoy our Premium 1 year Plan<br><br>
                Make them wonder who are you with your new LOOKS!<br><br>
                Subscribe NOW!<br><br>
            <button class="subscribe-btn" onclick="subscribe('RM125')">YEAAAZZZ!!</button>
            </td>
             </tr>
    </table>
    
     <script>
        function subscribe(data) {
            window.location.href = 'checkout.php?data=' + encodeURIComponent(data);
        }
    </script>
    
</body>
</html>