<?php

$days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');

foreach ($days as $day => $d) {
    if ($day == 5 or $day == 6) {
        echo "<b>$d</b></br>";
    }else {
        echo $d."<br>";
    }
}

