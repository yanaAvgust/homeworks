<?php
// Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>


function my_Test($a)
{
    echo '<pre>';
    print_r($a);
    echo '<pre>';
}

$l = array('html', 'css', 'php', 'js', 'jq');

echo my_Test($l);