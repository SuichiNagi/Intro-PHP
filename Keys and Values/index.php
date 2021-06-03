<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function keys_values($arr){

    echo 'There are 2 keys in this array:<br> first_name <br> last_name <br>';
    foreach($arr as $key => $value){
        echo "The value in the key '" . $key . "' is '" . $value . "'.<br>";
    }
    
}

keys_values($users);

?>