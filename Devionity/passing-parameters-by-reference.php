<?php
// Создать функцию, которая принимает один аргумент в виде
// массива и дописывает в него последним элементом количество
// значений массива


function my_Test (&$l)
{
    array_push ($l, count ($l));
    echo '<pre>';
    print_r($l);

}

$l = array(12,56,58,24,66);

echo my_Test($l);