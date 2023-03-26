<?php

$color = $_GET['color'] ?? '0d0d0d';
$color = str_replace('#', '', $color);
if (!preg_match('/^[\da-f]{6}$/', $color)){
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
<form action="" method="get">
        <input type="color" name="color" id="color-input">
        <!-- <div id="color-preview" style="width: 100px; height: 100px; border: 1px solid black;"></div> -->
        <button type="submit">GO</button>
    </form>

    <script>
        const colorInput = document.getElementById('color-input');
        const colorPreview = document.getElementById('color-preview');

        colorInput.addEventListener('change', () => {
            colorInput.style.backgroundColor = colorInput.value;
        });
    </script>
</body>
</html>
