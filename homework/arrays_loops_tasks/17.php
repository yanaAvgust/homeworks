<?php
// Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
// Текущий месяц должен храниться в переменной $month.
$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des');

foreach ($months as $m) {
    $month = date('M');
    if ($m==$month){
        echo "<b>$m</b></br>";
    }else{
        echo($m)."<br>";}
}