<?php
//  Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
// $cols - кол-во столбцов в таблице. Есть список цветов,
// в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
// в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
// В каждой ячейке должно находиться случайное число.

$row = rand (3, 7);
$cols = rand (4, 8);
$colors = array ('red','yellow','blue','gray','maroon','brown','green');


echo '<table border = 1>';
for ($i = 1; $i < $row; $i ++) {
    echo '<tr>';
    for ($j = 1; $j < $cols; $j ++) {
        $number=rand();
        $c = $colors [rand(0,count($colors) -1)];
        echo "<td style='background-color:{$c}'>".$number.'</td>';

}
    echo '</tr>';
    }

echo '</table>';