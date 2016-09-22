<?php

$numbers=array(1,20,15,17,24,35);

$result = 0;

foreach($numbers as $value)
{
    $result = $result + $value;
}

echo $result;

