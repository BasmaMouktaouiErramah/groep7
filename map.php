<?php

include "header.php";

echo $html = '

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <title>Maps Project</title>

    <style>
        #map{
            height: 550px;
            width: 1000px;
            margin:5rem auto;
            margin-top: 10px;
        }
    </style>

</head>
<body>
    
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="index.js"></script>
</body>
</html>

';