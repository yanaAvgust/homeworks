<?php
// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
// выходные дни следует вывести жирным.
$days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');

foreach ($days as $day => $d) {
    if ($day == 5 or $day == 6) {
        echo "<b>$d</b></br>";
    }else {
        echo $d."<br>";
    }
}

