<?php
$arr=array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $list) {

    if ($list > 1 & $list < 5) {
        echo $list. ' - Есть!';
        echo '<br>';
    } else {
        echo $list. ' -  Нет!';
        echo '<br>';

    }
}
