<?php

// $color = isset($_GET['color']) ? $_GET['color'] : '';

header('Location: http://localhost/php-homework/web-mechanic/04/orange.php');
 
if($color == ''){
    $bgcolor = 'yellow';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEMON</title>
</head>
<body style="background-color: <?= $bgcolor ?>;">
<h1>Welcome to LEMON page</h1>
    <a href="http://localhost/php-homework/web-mechanic/04/orange.php">Nuoroda į orange.php</a>
</body>
</html>

