<?php
// Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных
// слов в тексте. Реализовать с помощью функции.

include "2.html";

//$a = $_POST ['a'];
$a = "'monday', 'racomakafon', 'cat', 'everybody', 'little'";

function Top_3 ($a)
{
 foreach ($a as $k => $v) {
     $k = mb_strlen($v);
     sort ($a);
     echo "$k - $v. <br>";
 }
}


    //return (array_slice($a, 0, 3));




print_r(Top_3 ($a));



//for ($i = 0; $i < count($a); $i++) {
    //for ($j = 0; $j < count($a)-1; $j++) {
      //  if (mb_strlen($a[$j])>mb_strlen($a[$j+1])){
        //    $c=$a[$j];
          //  $a[$j]=$a[$j+1];
            //$a[$j+1]=$c;



//return (array_slice($a, 0, 3));