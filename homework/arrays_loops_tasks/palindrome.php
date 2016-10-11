<?php

$x = 456065837;
$s = 0;

while ($x !=0) {
    $r = $x % 10;
    $x = (int) ($x/10);
    $s = $s*10 + $r;
}

echo $s;