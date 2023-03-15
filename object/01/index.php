<?php

require __DIR__ . '/Kibiras.php';


$kibiras1 = new Kibiras;

$kibiras1->pridetiAkmeni();
$kibiras1->pridetiDaugAkmenu(5);
$kibiras1->pridetiAkmeni();

echo '<pre>';

var_dump($kibiras1);
echo "Pririnkta akmenų: " . $kibiras1->kiekPririnktaAkmenu(); 