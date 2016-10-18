

<?php
// Определить рекурсивную функцию - аналог функции print_r

$item = array("big", "slow", "fat", "handsome", "lazy");
function show_arr($item,$i='')
{
    foreach($item as $key=>$value)
    {
        echo $i."[".$key."] => ";

        if (is_array($value))
        {

            echo "Array.'<br>''";
            show_arr($value,$i.="\t");
        }
        else {
            echo $value."\n";}

    }
}
show_arr($item);

?>
