<?php

$color = isset($_GET['color']) ? $_GET['color'] : '';


if($color == ''){
    $bgcolor = 'orange';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORANGE</title>
</head>
<body style="background-color:<?= $bgcolor ?>;">
    <h1 style="color: maroon">Welcome to ORANGE page!</h1>
</body>
</html>

