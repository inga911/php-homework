<?php

require __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(200);
$stikline1->ispilti();
echo '<br>';
$stikline2->ipilti(150);
$stikline2->ispilti();
echo '<br>';
$stikline3->ipilti(100);
$stikline3->ispilti();