<?php

require __DIR__ . '/MarsoPalydovas.php';

$planet1 = MarsoPalydovas::makePlanet();
$planet2 = MarsoPalydovas::makePlanet();

echo '<pre>';
var_dump($planet1);
var_dump($planet2);