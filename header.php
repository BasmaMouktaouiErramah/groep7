<?php

echo $html = '
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d285a26313.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <h2><a href="index.php" class="logo">#</a></h2>
        <div class="navigation">
            <a href="index.php">Home</a>
            <a href="map.php">Map</a>
            <a href="#">Info</a>
        </div>
        <label for="check">
            <i class="fas fa-bars menu-btn"></i>
            <i class="fas fa-times close-btn"></i>
        </label>
    </header>
</body>
</html>

';