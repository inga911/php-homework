<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2; url=http://localhost/php-homework/ciklai/kvadratas.php"> -->
    <title>Rombas</title>
    <style>
        span {
            line-height: 1em;
            padding: 0 3px;
        }
    </style>
</head>
<body>
<?php foreach (range(1, 10) as $v) : ?>
        <div>
        <?php foreach (range(1, 10) as $h) : ?>

            <?php if($v > $h) : ?>
            <span style="color:crimson;">0</span>
            <?php elseif($v == 11- $h) : ?>
            <span style="color:crimson;">0</span>
            <?php else : ?>
            <span style="color:rgb(<?= rand(0, 255) ?>,<?= rand(0, 255) ?>,<?= rand(0, 255) ?>);">*</span>
            <?php endif ?>

        <?php endforeach ?>
        </div>
    <?php endforeach ?>
    
</body>
</html>