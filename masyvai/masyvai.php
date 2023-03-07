<?php
echo "<h1><b>MASYVAI.</b></h1>";
echo '<pre>';
//1.
echo '<h3><b>PIRMOJI UZDUOTIS.</b></h3>';

$to_array = array();
for ($i = 0; $i < 30; $i++){
    $to_array[] = rand(5, 25);
}
print_r($to_array);



//2. 
echo '<h3><b>ANTROJI UZDUOTIS.</b></h3>';
//a.
$count = 0;
foreach ($to_array as $number){
    if($number > 10){
        $count++;
    }
}
echo 'a) Masyve reikšmių didesnių už 10 yra: ' . $count . "\n";

//b. 

$max_value = max($to_array);
$max_index = array_keys($to_array, $max_value);
echo 'b) Didziausia reiksme: '. $max_value . ";\n";
echo 'Jos indeksas(-ai): ';
foreach($max_index as $index){
    echo $index . ' ';
}



echo '<br>c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą' . "\n";
$sum = 0;
foreach($to_array as $key){
    for($i = 0; $i < count($to_array); $i++){
        if($i % 2 == 0){
            $sum++;
        }
    }
}
echo 'Suma: ' . $sum . "\n";

// d.
echo 'd) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas' . "\n";


echo 'e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39' . "\n";
$extra_array = array();
for ($i = 0; $i < 10; $i++){
    $extra_array[] = rand(5, 25);
}

$new_extra_array = [...$to_array, ...$extra_array];
print_r($new_extra_array);

echo 'f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių' . "\n";

$liginiai_i = array();
$nelyginiai_i = array();

foreach($new_extra_array as $index) {
    if ($index % 2 == 0) {
        $lyginiai_i[] = $index;
    } else {
        $nelyginiai_i[] = $index;
    }
}
echo 'Lyginiai: ';
print_r($lyginiai_i);
echo 'Neygiai: ';
print_r($nelyginiai_i);



echo 'g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15 <br>';
    for($i = 0; $i < count($to_array); $i +=2){
        if($to_array[$i] > 15){
            $to_array[$i] = 0;
        }
}
print_r($to_array);


echo 'h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10 <br>';
$min_index = null;
foreach($to_array as $key => $value){
    if($value > 10){
        $min_index = $key;
        break;
    }
}
echo $min_index. "\n";

echo 'i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą <br>';
foreach($to_array as $index => $value){
    if($index % 2 == 0){
        unset($to_array[$index]);
    }
}
print_r($to_array);


//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';

$raidziu_arr = [];

for ($i = 0; $i < 200; $i++) {
    $randomNumber = rand(1, 4);
    switch ($randomNumber) {
        case 1:
            $raidziu_arr[] = 'A';
            break;
        case 2:
            $raidziu_arr[] = 'B';
            break;
        case 3:
            $raidziu_arr[] = 'C';
            break;
        case 4:
            $raidziu_arr[] = 'D';
            break;
        default:
            break;
    }
}
print_r($raidziu_arr);

$counts = array_count_values($raidziu_arr);

echo "A: " . $counts['A'] . "\n";
echo "B: " . $counts['B'] . "\n";
echo "C: " . $counts['C'] . "\n";
echo "D: " . $counts['D'] . "\n";

//4.
echo '<h3><b>KETVIRTOJI UZDUOTIS.</b></h3>';

sort($raidziu_arr);
print_r($raidziu_arr);


//5.
 echo '<h3><b>PENKTOJI UZDUOTIS.</b></h3>';


//6.
echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';
$pirmas_arr = array();
for($i = 0; $i < 100; $i++){
    $pirmas_arr[] = rand(100, 999);
} 
$unikalus_pirmas = array_unique($pirmas_arr);      
print_r($unikalus_pirmas);

$antras_arr = array();
for($i = 0; $i < 100; $i++){
    $antras_arr[] = rand(100, 999);
}       
$unikalus_antras = array_unique($antras_arr);      
print_r($unikalus_antras);


//7.
echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';



//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';
$result = array_diff($unikalus_pirmas, $unikalus_antras);
print_r($result);


//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';
$combo_arr = array_combine($pirmas_arr, $antras_arr);
print_r($combo_arr);

//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';
$first_num = rand(5, 25);
$second_num = rand(5, 25);

$third_num = $first_num + $second_num;

$array = array($first_num, $second_num, $third_num);
for ($i = 3; $i < 10; $i++) {
    $next_num = $array[$i - 1] + $array[$i - 2];
    $array[] = $next_num;
}

print_r($array);


//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';

