<?php

$numbers = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach($numbers as $number){

    $result += $number * $number;
}
echo $result;

//все равно ответ не верный(((