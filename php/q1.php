<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/main.css">
<title>CSE 135</title>

<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
        background-color:<?php echo $color;?>


    }
</style>
</head>
<body>
        <?php
                date_default_timezone_set("America/Los_Angeles");
                echo "Hello Web World from Language PHP on" . date("Y-m-d") . date("h:i:sa") . "enjoy my color page"
        ?>

</body>
</html>

