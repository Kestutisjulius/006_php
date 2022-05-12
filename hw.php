<?php
echo '<pre>';
/**
Sugeneruokite masyvą iš 10 elementų,
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
$arr1 = [];
foreach (range(1,10) as $element){
    $row = [];
    foreach (range(1,5) as $column){
        $row[] = rand(5,25);
    }
    $arr1[]=$row;
}
/**
Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra elementų didesnių už 10;
Raskite didžiausio elemento reikšmę;
*/

$count = 0;
$max = 0;
$var = [];

foreach ($arr1 as $num) {
    foreach ($num as $key => $n) {
        if (10 < $n) {
            $count++;
        }
        if ($max < $n) {
            $max = $n;
        }
    }
}
    //echo $count;
    //echo $max;
/**
Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
 (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
for($i=0; $i<5; $i++){
    $kSum=0;
    foreach ($arr1 as $num) {
        foreach ($num as $key => $n) {
            if ($i == $key){
                $kSum += $n;
            }
        }
    }
  //  echo " $kSum ";
}
/** Visus masyvus “pailginkite” iki 7 elementų  */
foreach ($arr1 as &$num) {
    $num[]=rand(5,25);
    $num[]=rand(5,25);
}
    unset($num);
   // print_r($arr1);
/** Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir
sumas panaudokite kaip reikšmes sukuriant naują masyvą.
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai */
$sumOfNum = [];
foreach ($arr1 as $num) {
    $sumOfNum[] = array_sum($num);
}
   // print_r($sumOfNum);
/** Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų.
 * Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z.
 */
function getRandomString($n) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

    $n = [];
    foreach (range(1,10) as $line){
        $r = [];
        foreach (range(1,rand(2,20)) as $column) {
            $r[]=getRandomString(1);
        }
        $n[]=$r;
    }
   // print_r($n);
/* Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).*/
    foreach ($n as &$abc) {
        sort($abc);
    }
    unset($abc);
    //print_r($n);

/** 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. */
    sort($n);
    /** Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje */
    $temp = [];
    foreach ($n as $key => $abc) {
        if(in_array('K', $abc)){
            array_unshift($temp,$abc);
        } else {
            array_push($temp,$abc);
        }
    }
    //print_r($temp);
/** Sukurkite masyvą iš 30 elementų.
 * Kiekvienas masyvo elementas yra masyvas
 * [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.
 */
    $users=[];
    foreach (range(1,30) as $line){
        $user = [];
        $user['user_id']= rand(1,1000000);
        $user['place_in_row']= rand(1,100);
        $users[]= $user;
    }

    //print_r($users);
    /** 6.išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
     */
    usort($users, function($x, $y) {
        return $x['user_id'] <=> $y['user_id'];
    });
    //print_r($users);

    usort($users, function($x, $y) {
        return $y['place_in_row'] <=> $x['place_in_row'];
    });
   /** 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname.
    * Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
    */
    foreach ($users as &$user){
        $user['name']=getRandomString(rand(5,15));
        $user['surName']=getRandomString(rand(5,15));
    }
    unset ($user);
    //print_r($users);

    /** Sukurkite masyvą iš 10 elementų.
     * Masyvo reikšmes užpildykite pagal taisyklę:
     * generuokite skaičių nuo 0 iki 5.
     * Ir sukurkite tokio ilgio masyvą.
     * Jeigu reikšmė yra 0 masyvo nekurkite.
     * Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10.
     * Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
     */
    $db = [];
    foreach (range(1,10) as $element){
        $rLine = [];
        $randNum = rand(0,5);
        if($randNum > 0){
            foreach (range(1,$randNum) as $kint){
                $rLine[]=rand(0,10);
            }
        }else {
            $rLine[]=5;
        }
        $db[] = $rLine;
    }
    print_r($db);