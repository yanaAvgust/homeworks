<?php
$a = true;
$b = !$a;

$c = $b && $a || $b && $a || !$b && $a;

echo $c;

$x = true;

$e = $x xor 2;

var_dump($e);