<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock | PHP</title>
</head>
<body>
    <h1>Display Current Date and Time</h1>
    <h2>
        <?php
        echo "The time from the server is <span style='color: tomato';>".date("h:i:sa")."</span>";
        echo "<br />";
        echo "Today's Date is <span style='color: tomato';>".date("d-m-Y");
        date_default_timezone_set('Asia/Kolkata');
        echo "</span> and Current Time is <span style='color: red;'>".date("h:i:s a")."</span>";
        ?>
    </h2>
</body>
</html>