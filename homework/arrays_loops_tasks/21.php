<?php



for ($i = 1; $i <= 9; $i++)
{
    for ($j = 0; $j < $i; $j++)
    {
        $str .= $i;
    }
    echo $str.'<br>';
    $str = '';
    $j = 0;
}