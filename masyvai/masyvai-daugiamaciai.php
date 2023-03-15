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
 echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';
 echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';
//  $arr5 = [];
//  for($i = 0; $i < 30; $i++) {
//      $user_id = rand(1, 1000000);
//      $place_in_row = rand(0, 100);
//      $in_array = ['user_id' => $user_id, 'place_in_row' =>  $place_in_row];
//      $arr5[$i] = $in_array;
//     }

// print_r($arr5);

function getUnique($to)
{
    static $ids = [];
    do {
        $id = rand(1, $to);
    } while(in_array($id, $ids));
    $ids[] = $id;
    return $id;
}

function randString()
{
    $letters = range('a', 'z');
    $out = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $out .= $letters[rand(0, count($letters) - 1 )];
    }
    return $out;
}

$users = array_map(fn($_) => ['user_id' => getUnique(100), 'place_in_row' => rand(1, 100)], range(1, 30));

usort($users, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

$users = array_map(function($user) {
    $user['name'] = randString();
    $user['surname'] = randString();
    return $user;
}, $users);

print_r($users);


//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';


//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';


//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';


//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';


$num = range(0, 9);
$letter = range('a', 'f');
$arr = array_merge($num, $letter);
shuffle($arr);
$length = 6;
$randColor = substr(implode($arr), 0, $length);
echo $randColor;