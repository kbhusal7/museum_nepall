<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server data</title>
</head>
<body>
    <p> <?php
    @session_start();
    foreach ($_SESSION as $key => $value) {
       echo "$key : $value <br>";
    }
    
    echo $_SERVER['PHP_SELF']; ?>
</p>
    
</body>
</html>