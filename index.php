<?php

$animals = [

    ['name' => 'Pilkis', 'type' => 'cat'],

    ['name' => 'Šarikas', 'type' => 'dog'],

    ['name' => 'Bobikas', 'type' => 'dog'],

    ['name' => 'Juodis', 'type' => 'cat'],

    ['name' => 'Pūkis', 'type' => 'dog']

];
echo '<pre>';
foreach ($animals as $animal){
    if('cat' == $animal['type']) {
        print_r($animal['name']);
        echo '<br>';
    }

}
foreach ($animals as &$animal){
    if('Pūkis' == $animal['name']) {
        $animal['type'] = 'cat';
    }
}
//foreach ($animals as $key => $animal){
//    if('Pūkis' == $animal['name']) {
//        $animals[$key] = 'cat';
//    }
//}
$_6x6 = [];

for ($i = 0; $i<6; $i++){
    $row = [];
    for ($j=0; $j<6; $j++){
        $row[]=rand(6,36);

    }
    $_6x6[]=$row;
}
foreach ($_6x6 as $row){
    foreach ($row as $num){
        echo " $num ";
    }
    echo '<br>';
}

