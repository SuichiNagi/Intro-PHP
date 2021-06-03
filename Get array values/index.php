<?php 

$A = array(2,3,'Hello');

function print_lists($array){

    $output = '';

    foreach($array as $value){
        $output .= '<li>' . $value . '</li>';
    }
    echo '<ul>' . $output . '</ul>';
}

print_lists($A);
?>