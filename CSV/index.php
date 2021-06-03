<?php 

$file = file('CSV-Assignment.csv');

function read_csv($file){
    $rows = array();

    foreach (file($file, FILE_IGNORE_NEW_LINES) as $line){
        $rows[] = str_getcsv($line);
    }

    return $rows;
}

header('Content-Type: text/plain');
print_r(read_csv('CSV-Assignment.csv'))


?>