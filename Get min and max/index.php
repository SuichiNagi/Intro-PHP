<?php

$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);

function get_max_and_min($arr){
    $max = 0;

    for ($i = 0 ; $i < count($arr); $i++) {
        if ($i == 0) {
            $max = $arr[$i];
        }
        else if ($i > 0) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
    }

    $min = 0;

    for ($i = 0 ; $i < count($arr); $i++) {
        if ($i == 0) {
            $min = $arr[$i];
        }
        else if ($i > 0) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
    }

    $max_min['max'] = $max;
    $max_min['min'] = $min;                
    return $max_min;
}

$output = get_max_and_min($sample);
var_dump($output);
//$output should be equal to array('max' => 332, 'min' => 1.02);


?>