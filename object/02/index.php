<?php

require __DIR__ . '/Pinigine.php';

$p = new Pinigine;

$p->ideti(5);
$p->ideti(22.67);
$p->ideti(111);

// $pinigine1->skaiciuoti();


// var_dump($pinigine1);
echo  $p->skaiciuoti(); 