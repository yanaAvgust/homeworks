<?php

$days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
foreach ($days as $d) {
    $day = date('D');
    if ($d==$day){
        echo "<i>$d</i></br>";
    } else{
        echo($d)."<br>";}
}