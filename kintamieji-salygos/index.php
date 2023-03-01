
<?php 
echo '<h1><b>KINTAMIEJI IR SALYGOS.</b></h1>';
//1.
echo '<h3><b>PIRMOJI UZDUOTIS.</b></h3>';
    $name = 'Inga';
    $lastName = 'B';
    $birthDate = 1995;
    $thisYear = 2023;
    $years = $thisYear - $birthDate;
    echo "As esu $name $lastName. Man yra $years metai."; 

//2. 
echo '<h3><b>ANTROJI UZDUOTIS.</b></h3>';

    $a = rand(0, 4);
    $b = rand(0, 4);
    echo "Cia matomi $a ir $b atsitiktiniai skaiciai.<br> ";
    $AB = match(true) {
        $a === 0 => 'Negalima dalinti is 0',
        $b === 0 => 'Negalima dalinti is 0',
        $a >= $b && $a !== 0 => $a / $b,
        $a <= $b && $b !== 0 => $b / $a,
    };
    echo $AB;

//3.
echo '<h3><b>TRECIOJI UZDUOTIS.</b></h3>';

    $c = rand(0, 25);
    $d = rand(0, 25);
    $e = rand(0, 25);
    echo "Cia matomi $c, $d ir $e atsitiktiniai skaiciai.<br> ";

    if ($c > $d) {
        [$c, $d] = [$d, $c];
    } 
    if ($d > $e) {
        [$d, $e] = [$e, $d];
    } 
    if ($c > $d) {
        [$c, $d] = [$d, $c];
    } 

    $vidurinisSkaicius = $d;
    echo "Cia matomas vidurinis uzduoties skaicius: $vidurinisSkaicius";

//   if ($c > $d && $d > $e) {
//         echo "vidurinis yra $d";
//     }
//     if ($d > $c && $c > $e) {
//         echo "vidurinis yra $c";
//     } 
//     if ($c > $e && $e > $d) {
//         echo "vidurinis yra $e";
//     }

    //4.
    echo '<h3><b>KETVIRTOJI UZDUOTIS.</b></h3>';

    $krastine_1 = rand(1, 10);
    $krastine_2 = rand(1, 10);
    $krastine_3 = rand(1, 10);
    echo "Cia matomi  $krastine_1, $krastine_2 ir $krastine_3 atsitiktiniai krastiniu ilgiai.<br>";

    $trikampis = match(true) {
        ($krastine_1 + $krastine_2) > $krastine_3 => 'Trikampi sudaryti GALIMA',
        ($krastine_2 + $krastine_3) > $krastine_1 => 'Trikampi sudaryti GALIMA',
        ($krastine_3 + $krastine_1) > $krastine_2 => 'Trikampi sudaryti GALIMA',
        default => 'Trikampio sudaryti NEgalima',
    };
    echo $trikampis;

    //5.
    // echo '<h3><b>PENKTOJI UZDUOTIS.</b></h3>';

    // $pirmas_kintamas = rand(0, 2);
    // $antras_kintamas = rand(0, 2);
    // $trecias_kintamas = rand(0, 2);
    // $ketvirtas_kintamas = rand(0, 2);
    // echo "Cia matomi keturi random skaiciai: $pirmas_kintamas, $antras_kintamas, $trecias_kintamas, $ketvirtas_kintamas";

//     Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
// (sprendimui masyvo nenaudoti).


//6.
echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';

$h_tag = rand(1, 6);
echo "<h$h_tag>$h_tag</h$h_tag>";


//7.
    echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';

    $skaicius1 = rand(-10, 10);
    $skaicius2 = rand(-10, 10);
    $skaicius3 = rand(-10, 10);
    echo "Cia matomi $skaicius1, $skaicius2 ir $skaicius3 atsitiktiniai skaiciai.";

    $pirmas = match(true) {
        $skaicius1 < 0 => "<span style='color: green;'>$skaicius1</span>",
        $skaicius1 > 0 => "<span style='color: blue;'>$skaicius1</span>",
        default => "<span style='color: red;'>$skaicius1</span>",
    };
    echo "<h4>$pirmas</h4>";

    $antras = match(true) {
        $skaicius2 < 0 => "<span style='color: green;'>$skaicius2</span>",
        $skaicius2 > 0 => "<span style='color: blue;'>$skaicius2</span>",
        default => "<span style='color: red;'>$skaicius2</span>",
    };
    echo "<h4>$antras</h4>";

    $trecias = match(true) {
        $skaicius3 < 0 => "<span style='color: green;'>$skaicius3</span>",
        $skaicius3 > 0 => "<span style='color: blue;'>$skaicius3</span>",
        default => "<span style='color: red;'>$skaicius3</span>",
    };
    echo "<h4>$trecias</h4>";

//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';
    $zvakes = rand(5, 3000);
    $nuolaida_uz_1000 = $zvakes - ($zvakes * 0.03);
    $nuolaida_uz_2000 = $zvakes - ($zvakes * 0.04);

    if ($zvakes >= 1000 && $zvakes < 2000) {
        echo "$zvakes zvakes su 3% nuolaida kainuos $nuolaida_uz_1000 eurus";
    } elseif ($zvakes >= 2000) {
        echo "$zvakes zvakes su 4% nuolaida kainuos $nuolaida_uz_2000 eurus";
    }

//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';

    $pirmasis = rand(0, 100);
    $antrasis = rand(0, 100);
    $treciasis = rand(0, 100);

    $vidurkis_nr_1 = round(($pirmasis + $antrasis + $treciasis) / 3);
    echo "Pirmasis vidurkis $vidurkis_nr_1";

    /*
    truksta antros dalies
    */

//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';

    $valandos = rand(0, 23);
    $minutes = rand(0, 59);
    $sekundes = rand(0, 59);

    echo "Laikrodis dabar rodo: " . sprintf("%02d:%02d:%02d", $valandos, $minutes, $sekundes) . "<br>";
    
    $papildomos_sec = rand(0, 300);

    $sekundes += $papildomos_sec;
    if ($sekundes > 59) {
        $minutes += floor($sekundes/60);
        $sekundes = $sekundes % 60;
    }

    if ($minutes > 59) {
        $valandos += floor($minutes/60);
        $minutes = $minutes % 60;
    }

    if ($valandos > 23) {
        $valandos = $valandos % 24;
    }

    echo "Laikas po $papildomos_sec sekundziu" . sprintf("%02d:%02d:%02d", $valandos, $minutes, $sekundes);


//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';

    $nr_1 = rand(1000, 9999);
    $nr_2 = rand(1000, 9999);
    $nr_3 = rand(1000, 9999);
    $nr_4 = rand(1000, 9999);
    $nr_5 = rand(1000, 9999);
    $nr_6 = rand(1000, 9999);
    $to_string = "$nr_1   $nr_2   $nr_3   $nr_4   $nr_5   $nr_6";
    echo $to_string;