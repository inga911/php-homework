<?php

require __DIR__ . '/Pinigine.php';

$pinigine1 = new Pinigine;

$pinigine1->ideti(5);
$pinigine1->ideti(2);
$pinigine1->ideti(1);

// $pinigine1->skaiciuoti();


// var_dump($pinigine1);
echo  $pinigine1->skaiciuoti(); 