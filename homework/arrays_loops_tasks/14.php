<?php


$num = array(4, 2, 5, 19, 13, 0, 10);
$e = rand(2,4);

foreach ($num as $a) {
    if ($a == $e) {
        echo 'Есть!';
        break;
    }
}
