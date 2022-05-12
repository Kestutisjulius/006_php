<?php
echo '<pre>';

$opapa = 'opapa';
$mas = [2,3,4];
function bla($j, $s, $t){
    echo '<h1>funkcija BLA</h1>';
    echo "<h1>funkcija $j $s $t</h1>";
}
bla(...$mas);

function kelintas(){
   static $k = 0;
    $k++;
    return $k;
}
echo kelintas();
echo kelintas();
echo kelintas();

$beVardo = function(){
    echo 'neturiu vardo';
};
$beVardo();