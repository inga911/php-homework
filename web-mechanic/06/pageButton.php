<!-- <?php

header('Location: http://localhost/php-homework/web-mechanic/06/pageButton.php');
die; 

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		return '<body class="green-bg">';
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo '<body class="yellow-bg">';
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 uzduotis</title>
    <style>
        .bg-green {
            background-color: palegreen;
        }
        .bg-yellow {
            background-color: gold;
        }
    </style>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
        <label for="bgColor">Form GET</label>
        <input type="text" name="bgColor">
        <button type="submit" name="button" value="get button">Turn to green</button>
    </form>
    <br>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="bgColor">Form POST</label>
        <input type="text" name="bgColor">
        <button type="submit" name="button" value="post button">Turn to yellow</button>
    </form>
</body>
</html> -->
