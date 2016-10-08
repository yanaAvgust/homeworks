<?php

$arr = array(
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
);

foreach ($arr as $name => $summ) {
    echo "$name — зарплата $summ". '<br>';
};