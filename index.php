<?php
$bg = array('img1.JPG', 'img2.JPG', 'img3.JPG', 'img4.JPG', 'img5.JPG', 'img6.JPG', 'img7.JPG', 'img8.JPG', 'img9.JPG', 'img10.JPG', 'img11.JPG', 'img12.JPG', 'img13.JPG');
$i = rand(0, count($bg) - 1);
$selectedBg = "$bg[$i]";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DJ0RDJ3's personal site">
    <meta property="og:description" content="My personal site">
    <meta property="og:url" content="http://dj0rdj3.ddns.net">
    <meta name="description" content="My personal site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>DJ0RDJ3's personal site</title>
    <style>
        body {
            background: url(/bg/<?php echo $selectedBg; ?>) no-repeat !important;
        }
    </style>
</head>

<body>

    <h1>Welcome to DJ0RDJ3's personal page</h1>
    <div id="contact">
        <div id="contacthd">Contact</div>
        <p>Discord: DJ0RDJ3#7258</p>
        <p>Twitter: _dj0rdj3_</p>
        <p>GitHub: dj0rdj3</p>
        <p>Email: smolsnaek &ltat&gt gmail.com</p>
    </div>
    <script src="move.js"></script>
    <div class="bar">
        <div>
            <p>If you're looking for Minecraft</p>
            <p>server maps, they are here:</p>
        </div>
        <a href="/mapa/">Meko M*do</a>
        <a href="/mc/">Whitelisted</a>
    </div>
</body>

</html>