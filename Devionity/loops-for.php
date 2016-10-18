<?php
// Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при
// помощи for. Простое число - это число которое делится только на себя и на 1

$a = rand(1, 100);


function classic($num)
{
    for ($x = 2; $x <= sqrt($num); $x++)
        if (!($num % $x)) return false;

    return true;
}

if(classic((int)$a)) echo 'prostoe';
else echo 'sostavnoe';