<?php

$A = array(2, 4, 10, 16);
function multiply($arr, $n)
{
    $array_new = array();
    foreach ($arr as $value) {
        array_push($array_new, $value * $n);
    }
    print_r($array_new);
    return $array_new;
}
$B = multiply($A, 2);
var_dump($B);
