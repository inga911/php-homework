<?php

// if($_SERVER['REQUEST_METHOD'] == 'POST') {

//     header('Location: http://localhost/php-homework/web-mechanic/02/page2.php');
//     die;
// }

$color = $_GET['color'] ?? 'ff00ff';
if (preg_match('/^[\da-f]{6}$/', $color)){
    $color = 'ff0000';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Užduotis 2</title>
</head>
<body style="background: #<?= $color ?>;">
	<!-- <a href="http://localhost/php-homework/web-mechanic/02/page2.php">Nuoroda į juodą puslapį</a> -->
</body>
</html>
