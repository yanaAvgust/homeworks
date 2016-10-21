<?php
// Создать алгоритм определения всех простых чисел в промежутке
// от 1 до 100 при помощи while.
// Простое число - это число которое делится только на себя и на 1

$a = rand (1,100);
$b = " ";



while ($a %2 == 1) {
    $b = $b || $a;



 if ($a %2 != 1) {
     echo "$a простое число". "<br>";
 } else {
     echo "$a непростое число". "<br>"; break;
 };

};
// то же но с помощью функции


function dd($var, $die = false)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';

    if ($die) {
        die;
    }
}

function isPrime($number)
{
    if (!is_numeric($number)) {
        return false;
    }

    if ($number == 2) {
        return true;
    }

    for ($j = 2; $j < $number; $j++) {
        $res = $number % $j;

        if ($res == 0) {
            return false;
        }
    }

    return true;
}

function getPrimesFromRange($a, $b = null)
{
    $primes = [];
    if (!$b) {
        $start = 2;
        $end = $a;
    } else {
        $start = $a;
        $end = $b;
    }

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}



dd(getPrimesFromRange(4,100));





