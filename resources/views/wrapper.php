<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loca FM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1 style="color: red">Loca FM la mejor musica</h1>
<a href="<?= $site_url ?>/public/?page=index">Home</a>
<a href="<?= $site_url ?>/public/?page=list">List of songs</a>

<?php include $content; ?>
    
</body>
</html>