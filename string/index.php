<?php
echo "<h1><b>STRING'AI (MOVIE EDITION).</b></h1>";

//1.
echo '<h3><b>PIRMOJI UZDUOTIS.</b></h3>';
$aktorius1 = 'Petras Petraitis';
$aktorius2 = 'Ona Onute';

$aktorius11 = strlen($aktorius1);
$aktorius22 = strlen($aktorius2);
if ($aktorius11 < $aktorius22){
    echo $aktorius1;
} else {
    echo $aktorius2;
}

//2. 
echo '<h3><b>ANTROJI UZDUOTIS.</b></h3>';
$aktoriusV = 'Petras';
$aktoriusP = 'Petraitis';
echo 'Vardas: ' . strtoupper($aktoriusV) . '<br> Pavarde: ' . strtolower($aktoriusP);

//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';
$aktoriusV = 'Petras';
$aktoriusP = 'Petraitis';
$pirmaVP = substr($aktoriusV, 0, 1) . substr($aktoriusP, 0, 1);
echo 'Pirmos vardo ir pavardes raides: ' . $pirmaVP;

//4.
echo '<h3><b>KETVIRTOJI UZDUOTIS.</b></h3>';
$aktoriusV = 'Petras';
$aktoriusP = 'Petraitis';
$pirmaV = substr($aktoriusV, -3);
$pirmaP = substr($aktoriusP, -3);
echo 'Paskutines 3 vardo raides: ' . $pirmaV . '<br>Paskutines 3 pavardes raides: ' . $pirmaP;

//5.
 echo '<h3><b>PENKTOJI UZDUOTIS.</b></h3>';
$string = 'An American in Paris';
$istrinti = ['A','a'];
$zvaigzdutes = str_replace($istrinti, '*', $string);
echo $zvaigzdutes;

//6.
echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';
$string1 = 'An American in Paris';
$stringToLow = strtolower($string1);
$skaiciuoti = substr_count($stringToLow, 'a');
echo "Pasikartoja " . $skaiciuoti . " kartus(-a).";

//7.
echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';
$str_a = 'An American in Paris';
$str_b = "Breakfast at Tiffany's";
$str_c = '2001: A Space Odyssey';
$str_d = "It's a Wonderful Life";
$del_vowels = ['A','a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u'];

echo str_replace($del_vowels, '', $str_a);
echo '<br>' . str_replace($del_vowels, '', $str_b);
echo '<br>' . str_replace($del_vowels, '', $str_c);
echo '<br>' . str_replace($del_vowels, '', $str_d);

//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';
$a = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope<br>';
echo $a;

preg_match('/\d/', $a, $result);
echo '<pre>';
print_r($result);
echo 'Epizodo numeris yra: ' . $result;
echo '</pre>';



//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';
$string_en = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string_lt = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$words = explode(' ', $string_lt);
$count = 0;
foreach ($words as $word) {
    if (strlen($word) <= 5) {
        $count++;
    }
}
echo "Žodžių, kurių ilgis yra trumpesnis arba lygus nei 5 raidės, yra: " . $count;


//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';
$raides = 3;
function getRandomStr($raides) {
    $simboliai = 'abcdefghijklmnoprstuvz';
    $randStr = '';
    for ($i = 0; $i < $raides; $i++) {
        $index = rand(0, strlen($simboliai) -1);
        $randStr = $randStr.$simboliai[$index];
    }
    return $randStr;
}
echo "Atsitiktinis 3-ju lotynisku raidziu string'as: " . getRandomStr($raides);



//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';
$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$str_to_array = str_word_count($string, 1, 'ąų');
echo '<pre>';
print_r($str_to_array);
echo '</pre>';

// $to_str = implode(' ', $str_to_array);
// echo $to_str;

$masyvas10 = 10;
$rand_index = array_rand($str_to_array, 10);
$rand_words = array($str_to_array[$rand_index[0]], 
                    $str_to_array[$rand_index[1]], 
                    $str_to_array[$rand_index[2]], 
                    $str_to_array[$rand_index[3]], 
                    $str_to_array[$rand_index[4]], 
                    $str_to_array[$rand_index[5]], 
                    $str_to_array[$rand_index[6]], 
                    $str_to_array[$rand_index[7]], 
                    $str_to_array[$rand_index[8]], 
                    $str_to_array[$rand_index[9]]);
$string_from_a = implode(' ', $rand_words);
echo '<br>' . "<b>String'as iš 10 atsitiktinių žodžių: </b><br>" . $string_from_a;


echo '<br><br>-----code wars-------<br><br>';
function noSpace($x){
    $withoutSpace = str_replace(' ', '', $x);
    return $withoutSpace;
}

echo noSpace('8aaaaa dddd r     ');