<?php

$color = 'skyblue';//pradinis puslapio fonas

if(isset($_GET['bgColor'])) {
    $bgColor = $_GET['bgColor'];
    if(preg_match("/^[0-9a-fA-F]{6}$/", $bgColor)) {
        $color = '#' . $bgColor;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 uzduotis</title>
</head>
<body style="background-color: <?= $color ?>">
    <form action="" method="get">
        <label for="bgColor">Įveskite norimos rgb spalvos kodą: </label>
        <input type="text" name="bgColor">
        <button type="submit">Eiti į šios spalvos foną</button>
    </form>
    <a href="http://localhost/php-homework/web-mechanic/03/page3.php?bgColor=000000">Nuoroda į juodą puslapį</a>
</body>
</html>