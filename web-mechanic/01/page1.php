<?php

$color = isset($_GET['color']) ? $_GET['color'] : '';

if($color == '1'){
    $bgcolor = 'red';
} else {
    $bgcolor = 'black';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 uzduotis BLACK / RED page</title>
</head>
<body style="background-color: <?= $bgcolor ?>;">
    <a href="http://localhost/php-homework/web-mechanic/01/page1.php">Nuoroda į juodą puslapį</a>
	<a href="http://localhost/php-homework/web-mechanic/01/page1.php?color=1">Nuoroda į raudoną puslapį</a>
</body>
</html>

