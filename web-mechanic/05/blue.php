<?php

$color = isset($_GET['color']) ? $_GET['color'] : '';

header('Location: http://localhost/php-homework/web-mechanic/05/red.php');
die; 

if($color == ''){
    $bgcolor = 'skyblue';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE</title>
</head>
<body style="background-color: <?= $bgcolor ?>;">
<h1>Welcome to BLUE page</h1>
    <a href="http://localhost/php-homework/web-mechanic/05/blue.php">Nuoroda į blue.php</a>
</body>
</html>

