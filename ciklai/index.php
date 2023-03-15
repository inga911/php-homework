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

require './kvadratas.php';

//5.
 echo '<h3><b>PENKTOJI UZDUOTIS.</b></h3>';
//TARP 4 UZDUOTIES

//6.
echo '<h3><b>SESTOJI UZDUOTIS.</b></h3>';
// 1)
echo '-----<b>sustabdyti iškritus herbui----</b><br>';
while (true){
    $rezultatas1 = rand(0, 1);
    if($rezultatas1 === 0){
        echo 'Iskrito: ' . $rezultatas1 . '--> H<br>';
        break;
    }else{
        echo 'Iskrito: ' . $rezultatas1 .  '--> S<br>';
    }
}

// 2)
echo '-----<b>sustabdyti 3kartus iškritus herbui----</b><br>';


// 3)
echo '-----<b>sustabdyti 3kartus is eiles iškritus herbui----</b><br>';



//7.
echo '<h3><b>SEPTINTOJI UZDUOTIS.</b></h3>';
$petroTaskai = rand(10, 20);
$kazioTaskai = rand(5, 25);
echo 'Petras- ' . $petroTaskai . ':' . 'Kazys- ' . $kazioTaskai . 'Partija laimmejo: ';


//8.
echo '<h3><b>ASTUNTOJI UZDUOTIS.</b></h3>';
function generateBankAccountNumber() {
    $countryCode = "LT";
    $controlDigits = "60";
    $bankCode = "10100"; // Example bank code
    $accountNumber = str_pad(mt_rand(0, 99999999999), 11, '0', STR_PAD_LEFT); // Generate random 11 digit account number

    // $iban = $countryCode . $controlDigits . $bankCode . $accountNumber;
    // $checkDigits = generateIBANCheckDigits($iban); // Calculate IBAN check digits

    return $countryCode . $controlDigits  . $bankCode . $accountNumber; // Add check digits to the beginning of the IBAN
}
echo generateBankAccountNumber();

//9.
echo '<h3><b>DEVINTOJI UZDUOTIS.</b></h3>';
function akgen() {
    $met = rand(1901,2007);
    $men = rand(1, 12);
    $nr = rand(1, 999);
    if(in_array($men,[1,3,5,7,8,10,12])) {
        $dien = rand(1, 31);
    };
    if(in_array($men,[4,6,9,11])) {
        $dien = rand(1, 30);
    };
    if($men == 2) {
        if($met % 4 === 0) {
            $dien = rand(1, 29);
        } else {
            $dien = rand(1, 28);
        }
    }

    if($met > 1999) {
        $ak[] = rand(5, 6);
    } else {
        $ak[] = rand(3, 4);
    }
    $ak[] = floor(($met % 100) / 10);
    $ak[] = $met % 10;
    $ak[] = floor($men / 10);
    $ak[] = $men % 10;
    $ak[] = floor($dien / 10);
    $ak[] = $dien % 10;
    $ak[] = floor($nr / 100);
    $ak[] = floor(($nr % 100) / 10);
    $ak[] = $nr % 10;
    $ks = $ak[0] + $ak[1] * 2 + $ak[2] * 3 +
        $ak[3] * 4 + $ak[4] * 5 + $ak[5] * 6 +
        $ak[6] * 7 + $ak[7] * 8 + $ak[8] * 9 + 
        $ak[9];
    $kss = $ks % 11;    
    if($kss === 10) {
        $ks = $ak[0] * 3 + $ak[1] * 4 + $ak[2] * 5 +
            $ak[3] * 6 + $ak[4] * 7 + $ak[5] * 8 +
            $ak[6] * 9 + $ak[7] + $ak[8] + $ak[9];
        $kss = $ks % 11;
        if($kss === 10) $kss = 0;
    }        
    $ak[] = $kss;

    return implode('', $ak);
}        
echo akgen();
//10.
echo '<h3><b>DESIMTOJI UZDUOTIS.</b></h3>';



//11.
echo '<h3><b>VENUOLIKTOJI UZDUOTIS.</b></h3>';
function personalId(){
    static $ids = [];
    $id_number = '';
    do {
    $birth_century = rand(1,6);
    $birth_year = rand(0,99);
    $birth_month = rand(1, 12);
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $birth_month, date("Y"));
    $birth_day = rand(1, $daysInMonth);
    $sequence_numb = rand(0, 99);
    $control_numb = rand(0, 9);

    $today = new DateTime(date('Y-m-d'));
    $birth_year_full = ($birth_century - 1) * 100 + $birth_year;
    $birth_day_full = new DateTime(sprintf('%04d-%02d-%02d', $birth_year_full, $birth_month, $birth_day));
    $birth_day = $birth_day_full;
    
    if ($birth_day > $today) {
        $birth_year--;
        $birth_year_full--;
        $birth_day_full = new DateTime(sprintf('%04d-%02d-%02d', $birth_year_full, $birth_month, $birth_day));
        $birth_day = $birth_day_full;

    }

    $id_number = sprintf('%d%02d%02d%03d%d', $birth_century, $birth_year, $birth_month, $birth_day->format('d'), $sequence_numb, $control_numb);    $personal_code = str_split($id_number);
    $control_sum = 1 * $personal_code[0] + 2 * $personal_code[1] + 3 * $personal_code[2] + 4 * $personal_code[3] + 5 * $personal_code[4] + 6 * $personal_code[5] + 7 * $personal_code[6] + 8 * $personal_code[7] + 9 * $personal_code[8] + 1 * $personal_code[9];
    $control_numb = ($control_sum % 11 == 10) ? 0 : $control_sum % 11;
    $id_number .= $control_numb;
}while (in_array($id_number, $ids));
$ids[] = $id_number;

    return implode('', $ids);
}

echo personalId();




<?php

// function getUnique($to)
// {
//     static $ids = [];
//     do {
//         $id = rand(1, $to);
//     } while(in_array($id, $ids));
//     $ids[] = $id;
//     return $id;
// }




function personalId(){
    $ids = [];
    $id_number = '';
    do {
    $birth_century = rand(1,6);
    $birth_year = rand(0,99);
    $birth_month = rand(1, 12);
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $birth_month, date("Y"));
    $birth_day = rand(1, $daysInMonth);
    $sequence_numb = rand(0, 99);
    $control_numb = rand(0, 9);

    $today = new DateTime(date('Y-m-d'));
    $birth_year_full = ($birth_century - 1) * 100 + $birth_year;
    $birth_day_full = new DateTime(sprintf('%04d-%02d-%02d', $birth_year_full, $birth_month, $birth_day));
    $birth_day = $birth_day_full;
    
    if ($birth_day > $today) {
        $birth_year--;
        $birth_year_full--;
        $birth_day_full = new DateTime(sprintf('%04d-%02d-%02d', $birth_year_full, $birth_month, $birth_day));
        $birth_day = $birth_day_full;

    }

    $id_number = sprintf('%d%02d%02d%03d%d', $birth_century, $birth_year, $birth_month, $birth_day->format('d'), $sequence_numb, $control_numb);    
    $personal_code = str_split($id_number);
    $control_sum = 1 * $personal_code[0] + 2 * $personal_code[1] + 3 * $personal_code[2] + 4 * $personal_code[3] + 5 * $personal_code[4] + 6 * $personal_code[5] + 7 * $personal_code[6] + 8 * $personal_code[7] + 9 * $personal_code[8] + 1 * $personal_code[9];
    $control_numb = ($control_sum % 11 == 10) ? 0 : $control_sum % 11;
    $id_number .= $control_numb;
}while (in_array($id_number, $ids));

    $ids[] = $id_number;

    return implode('', $ids);
}




function randString()
{
    $letters = range('a', 'z');
    $out = '';
    foreach(range(1, rand(3, 10)) as $_) {
        $out .= $letters[rand(0, count($letters) - 1 )];
    }
    return $out;
}


function accNumber(){
    $countryCode  = 'LT';
    $controlDigits = '60';
    $bankCode = '10100';
    $accNumb = str_pad(mt_rand(0, 99999999999), 11, '0', STR_PAD_LEFT);

    return $countryCode . $controlDigits  . $bankCode . $accNumb;
}



// $clients = array_map(fn($_) => ['user_id' => getUnique(100)], range(1, 8));

usort($clients, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

$clients = array_map(function($client) {
    $client['id_number'] = personalId();
    $client['acc_number'] = accNumber();
    $client['name'] = randString();
    $client['surname'] = randString();
    return $client;
}, $clients);

file_put_contents(__DIR__ . '/clients.ser', serialize($clients));
echo '<pre>';
print_r($clients);

?>
