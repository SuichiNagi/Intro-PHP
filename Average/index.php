<?php 

$numbers = array(1, 2, 5, 10, 255, 3);
$total = 0;

for($i = 0; $i < count($numbers); $i++){
    $total += $numbers[$i];
}

$average = $total / count($numbers);

echo $average;

?>