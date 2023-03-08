<?php


echo "<h1><b>MASYVAI DAUGIAMACIAI.</b></h1>";
echo '<pre>';
//1.
echo '<h3><b>PIRMOJI UZDUOTIS.</b></h3>';

$arr = array();
for ($i = 0; $i < 10; $i++) {
    $inn_arr = array();
    for ($j = 0; $j < 5; $j++) {
        $inn_arr[] = rand(5, 25);
    }
    $arr [] = $inn_arr;
}
print_r($arr);



//2. 
echo '<h3><b>ANTROJI UZDUOTIS.</b></h3>';

//a) elementu daugiau uz 10
$count = 0;
foreach ($arr as $index => $inn_arr){
    foreach($inn_arr as $inn_index => $value){
    if ($value > 10){
        $count++;
    }
}
}
echo 'Reiksmiu, daugiau uz 10 yra: ' . $count;



// b) rasti didziausia reiksme
$max_value = max(array_map('max', $arr)); // 'max' istraukiau is vidiniu masyvu max reiksme
$min_value = min(array_map('min', $arr)); 
echo "\n" . 'Max reiksme: ' . $max_value;
echo "\n" . 'Mmin reiksme: ' . $min_value;


// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas


// d)Visus antro lygio masyvus “pailginkite” iki 7 elementų
foreach ($arr as &$inn_arr) {
    $inn_arr = array_pad($inn_arr, 7, 0);
    foreach ($inn_arr as &$value) {
        $value = rand(5, 25);
    }
}
print_r($arr);

//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';

$masyvas = [];
$kiekis = rand(2, 20);
for ($i = 0; $i < 10; $i++) {
    $masyvas_masyve = [];
    for ($j = 0; $j < $kiekis; $j++) {
        $masyvas_masyve[] = chr(rand(65, 90));
        sort($masyvas_masyve);
    }
    $masyvas[] = $masyvas_masyve;
}
print_r($masyvas);



//4.
echo '<h3><b>KETVIRTOJI UZDUOTIS.</b></h3>';

//5.
 echo '<h3><b>PENKTOJI UZDUOTIS.</b></h3>';


//6.
echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';


//7.
echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';



//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';


//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';


//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';


//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';

