<?php
// Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
// С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e,
// равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.

$num = array(4, 2, 5, 19, 13, 0, 10);
$e = rand(2,4);

foreach ($num as $a) {
    if ($a == $e) {
        echo 'Есть!';
        break;
    }
}
