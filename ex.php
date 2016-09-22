<?php
$numbers=range(1,9);
echo '<table border="1">';
foreach ($numbers as $number1) {
    echo '<tr>';
    foreach ($numbers as $number2) {
        $res = $number1 * $number2;
        $bg = $res % 2 ? 'blue' : 'yellow';
        echo '<td width="20 height=20 align="center">';
        echo $res . '</td>';}

    echo '</tr>';}
    echo '</table>';


