<?php
// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
// Текущий день должен храниться в переменной $day.

$days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
foreach ($days as $d) {
    $day = date('D');
    if ($d==$day){
        echo "<i>$d</i></br>";
    } else{
        echo($d)."<br>";}
}