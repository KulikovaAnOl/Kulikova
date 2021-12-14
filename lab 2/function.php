<?php
function output($text){
echo "$text";
}

function fillingArr($n, $l) {
$mass = array();
for ($i=0; $i < $n; $i++) {
for ($k=0; $k < $l ; $k++) {
$mass[$i][$k] = rand(0, 20);
}
}
return $mass;
}

function outArr($mass) {
foreach ($mass as $massive) {
echo "<br>";
foreach ($massive as $key => $mvalue) {
echo "$mvalue ";
}
}
}
function Sumdiog($mass) {
$q = 0;
$summ = 0;
for ($i=1; $i<count($mass); $i++) {
$q += $mass[$i][count($mass) - $i];

if ($q > $summ) {
$summ = $q;
}
}
echo "<br> ", $summ;
}
function summa($mass) {
$sum;
for ($i=0; $i < count($mass) ; $i++) { 
for ($j=0; $j < count($mass[1]) ; $j++) { 
if ($i - $j == 4) {
$sum += $mass[$i][$j];
}
}
}
return $sum;
}
?>