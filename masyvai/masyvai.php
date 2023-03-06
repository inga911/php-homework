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
echo 'a) Masyve reikšmių didesnių už 10 yra: ' . $count . '<br>';

//b. 

$max_value = max($to_array);
$max_index = array_keys($to_array, $max_value);
echo 'b) Didziausia reiksme: '. $max_value . ";\n";
echo 'Jos indeksas(-ai): ';
foreach($max_index as $index){
    echo $index . ' ';
}



echo '<br>c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą';
echo $to_array[$i];

//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';



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
