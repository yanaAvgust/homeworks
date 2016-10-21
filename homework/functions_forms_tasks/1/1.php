
<?php
// Создать форму с двумя элементами textarea.
// При отправке формы скрипт должен выдавать только те слова,
// которые есть и в первом и во втором поле ввода. Реализацию это логики
// необходимо поместить в функцию getCommonWords($a, $b), которая будет
// возвращать массив с общими словами.

include "1.html";

function get ($key) {
    return isset ($_POST[$key]) ? $_POST [$key] : null;
};

//$a = get ('a');
//$b = get ('b');

$a = "11111, 3, 11, 'aa', 'ff'";
$b = "11111, 'ff', 11, 22";

function getCommonWords($a, $b) {

    $a = explode(",", $a);
    $b = explode(",", $b);
    $ua = array_merge(array_unique($a));
    $ub = array_merge(array_unique($b));

    return $intersect = array_merge(array_intersect($ua, $ub));
}

echo '<pre>';
print_r (getCommonWords($a, $b));
echo '</pre>';

