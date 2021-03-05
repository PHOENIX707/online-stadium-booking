<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prg 7</title>
    <style>
        body {
            background-color: powderblue;
            color: red;
            margin: 30px;
        }
        #clock {
            margin: 20px;
            padding: 20px;
            width: 400px;
            border: medium dotted red;
            font-size: 50pt;
            font-family: Century Gothic, Sans-Serif;
        }
    </style>
</head>
<body>
    <h1>Digital Clock</h1>
    <hr/>
    <?php
    date_default_timezone_set('Asia/Kolkata');
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
    ?>
    <div id="clock">
        <?php
        echo idate("H").":".idate("i").":".idate("s");
        usleep(100);?>
    </div>
</body>
</html>
