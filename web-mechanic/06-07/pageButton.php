 <?php
session_start();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['color'] = 1;
        header('Location: http://localhost/php-homework/web-mechanic/06/pageButton.php');
        die; 
    }

    if(isset($_SESSION['color'])){
        $color = 'yellow';
        unset($_SESSION['color']);
    }else {
        $color = 'green';
    }

	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 uzduotis</title>
</head>
<body style="background: <?= $color ?>;">
    <form  method="get">
        <button type="submit">GET</button>
    </form>
    <br>
    <form  method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>
