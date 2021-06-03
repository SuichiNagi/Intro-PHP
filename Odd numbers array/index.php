<?php 

$array_variable = array();

for($i = 0; $i <= 20000; $i++){
    if(($i % 2) != 0){
     array_push($array_variable, $i);
    }
}

print_r($array_variable);
var_dump($array_variable);

?>