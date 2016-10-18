<?php



echo '<table border="1" cellpadding="20px" align="center" >';
for ($i = 1; $i <10; $i ++) {
    echo '<tr align="center">';
    for ($j = 1; $j <10; $j ++) {
        $res = $i * $j;
        if ( $res % 2 == 1)
        echo "<td>$res</td>";
        else
            echo "<td style='background-color: gray'>$res</td>";
    }
    echo '</tr>';
}
echo '</table>';

