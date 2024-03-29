<?php

require __DIR__ . '/Kibiras.php';

$k1 = new Kibiras1(200, 5);
$k2 = new Kibiras1(100, 7);
$k3 = clone $k2;

$k1->prideti1Akmeni();
$k1->prideti1Akmeni();

$k2->prideti1Akmeni();

$k3->prideti1Akmeni();
$k3->pridetiDaugAkmenu(5);

$k1->pridetiDaugAkmenu(10);

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();