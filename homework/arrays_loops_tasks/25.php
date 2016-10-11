<?php
// Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// найти максимальное и минимальное значение и поменять их местами.



for($i=0; $i<450; $i++) {
    $arr[$i] = rand(0,450);
}
print_r($arr);

$max = max($arr);
$min = min($arr);
$max = $min + $max;
$min = $max - $min;
$max = $max-$min;

echo $max. '<br>';
echo $min;