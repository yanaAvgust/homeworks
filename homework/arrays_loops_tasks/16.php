<?php


$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach($arr as $ar) {
    if ($ar % 3 == 0){
        echo $ar ."<br>";
    }else{
        echo $ar .", ";
    }
}