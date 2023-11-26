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
            <th>3 months</th>
            <th>6 months</th>
        </tr>
        <tr>
            <td>RM70<br><br>
                Enjoy 3 Months plan<br><br>
                Don't have to worry about commitments<br><br>
                Subscribe NOW!<br><br>
            <button class="subscribe-btn" onclick="subscribe('RM70')">WHY NOT?</button>
            </td>
            <td>RM95<br><br>
                Enjoy 6 Months plan<br><br>
                See the changes in you in another 6 months<br><br>
                Subscribe NOW!<br><br>
            <button class="subscribe-btn" onclick="subscribe('RM95')">YES I WANT!</button>
            </td>
        </tr>
    </table>
    
     <script>
        function subscribe(data) {
            window.location.href = 'checkout.php?data=' + encodeURIComponent(data);
        }
         function subscribe(data) {
            window.location.href = 'checkout.php?data=' + encodeURIComponent(data);
        }
    </script>
    
</body>
</html>
