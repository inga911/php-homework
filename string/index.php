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



//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';



//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';



//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';
