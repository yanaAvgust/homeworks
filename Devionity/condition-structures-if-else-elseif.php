<?php
$a = 5;
$b = 2;

if ($a > $b) {
    echo $a;
} elseif ($a == $b) {
    echo 'a = b';
} else
   echo $b;
echo '<br>';

// тернарный

$d = ($a > $b) ? $a : $b;

echo $d;
echo '<br>';

// switch


switch ($a) {
        case $a > $b :  echo $a; break;
        case $a == $b : echo 'a = b'; break;
        default :  echo $b;
    }

echo '<br>';
