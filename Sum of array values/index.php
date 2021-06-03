<?php

$numbers = array(1, 2, 5, 10, 255, 3);

function sumOfArray($numbers){

$total = 0;

for($i = 0; $i < count($numbers); $i++){
    $total += $numbers[$i];
    }
    echo $total. '<br>';
}

sumOfArray($numbers);

?>