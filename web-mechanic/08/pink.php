<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    header('Location: http://localhost/php-homework/web-mechanic/08/pink.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink.php</title>
</head>
<body style="background-color: pink;">
    <form action="http://localhost/php-homework/web-mechanic/08/rose.php" method="post">
        <button>GO TO ROSE</button>
    </form>
</body>
</html>