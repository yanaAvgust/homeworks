<?php


$numbers = array(2,45,3,32,1,67,234,68,22,54);

foreach ($numbers as $number) {
    if (($number % 3) == 0) {
        echo $number. '<br>';
    }
}


