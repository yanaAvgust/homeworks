<?php

//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
// С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for

$numbers = range(1, 9);
$s = '';

foreach ($numbers as $number) {
    $s .=$number;
}
echo $s;
