<?php
// Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных
// слов в тексте. Реализовать с помощью функции.

include "2.html";

function get ($key) {
    return isset ($_POST[$key]) ? $_POST [$key] : null;
};

//$a = get ('a');
$a = "'monday', 'rakomakafon', 'cat', 'everybody', 'little'";
$arr = explode(" ", $a);

function get_longest(array $arr) {

    if (!$arr)
        return false;

    $lengthes = array_map('mb_strlen', $arr);
    $max_length = max($lengthes);
    $key = array_search($max_length, $lengthes);
    return $arr[$key];
}



print_r(get_longest ($arr)."<br>");