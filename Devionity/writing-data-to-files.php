<?php

$f = fopen('test.txt', 'w');
fwrite($f, 1 . PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 22 . PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 333 . PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 4444 . PHP_EOL . 55555 .PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 666666 . PHP_EOL . 7777777 .PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 88888888 . PHP_EOL . 999999999 .PHP_EOL );
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, 10101010101010101010 . PHP_EOL );
fclose($f);

echo $f;

