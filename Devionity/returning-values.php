
<?php
// Реализовать функцию, которая определяет, будет ли число простым числом



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