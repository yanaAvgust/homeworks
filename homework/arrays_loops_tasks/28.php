<?php
// Вывести таблицу умножения с помощью двух циклов for.




echo '<table border="1" cellpadding="20px" align="center" >';
for ($i = 1; $i <10; $i ++) {
    echo '<tr align="center">';
    for ($j = 1; $j <10; $j ++) {
        $res = $i * $j;
        echo "<td>$res</td>";
    }
    echo '</tr>';
}
echo '</table>';

