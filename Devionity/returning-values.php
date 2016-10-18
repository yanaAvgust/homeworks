
<?php
// Реализовать функцию, которая определяет, будет ли число простым числом



function classic($num)
{
    for ($x = 2; $x <= sqrt($num); $x++)
        if (!($num % $x)) return false;

    return true;
}

if(classic((int)$_GET['num'])) {
    echo 'prostoe';
} else {
    echo 'sostavnoe';
}