<?php

$array = [];
$fibonacci = [1, 1];
$index_fibonacci = 0;

for ($i = 2; $i < 36; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
}

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 6; $j++) {
        $array[$j][$i] = $fibonacci[$index_fibonacci++];
    }
}
echo '<pre>';
print_r($array);
echo '<pre>';

$sum = 0;

for ($i = 0; $i <= 5; $i++) {
    $sum += $array[5 - $i][$i];
}
echo '<pre>';
print_r($sum);



