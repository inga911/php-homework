<?php
echo "<h1><b>CIKLAI.</b></h1>";

//1.
echo '<h3><b>PIRMOJI UZDUOTIS.</b></h3>';
//a.
// for ($x = 0; $x <=400; $x++){
//     echo '<p style="display: inline-block">*</p>';
// }
//b.

$stars = str_repeat('*', 400);
$lines = str_split($stars, 50);
foreach($lines as $line){
    echo $line . '<br>';
}

//2. 
echo '<h3><b>ANTROJI UZDUOTIS.</b></h3>';
$count = 0;
for ($i = 0; $i < 300; $i++) { 
    $a = random_int(0, 300);
    if ($a > 275) {
        echo "<span style='color:red'> " . $a . ' </span>';
    } else {
        echo $a . " ";
    }
    if ($a > 150) {
        $count++;
    }
}
echo '<br>Skaiciu virs 150 yra: ' . $count;


//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';
$numb_rand = rand(3000, 4000);
// echo $numb_rand;
for ($i = 1; $i <= $numb_rand; $i++) {
   if ($i % 77 == 0) {
    echo $i . ', ';
   } 
}
//Reikia TASKO vietoje kalblelio


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
