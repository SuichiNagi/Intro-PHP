<?php 

$headcount = 0;
$tailcount = 0;
$flipcount = 0;



for($i = 1; $i <= 5000; $i++){
    $flip = rand(0,1);
    $flipcount++;
    if($flip == 1){
        $headcount++;
        echo "Attemp #". $flipcount . " Throwing a coin... It's a head!... Got 
        '" . $headcount ."' head(s) so far and '". $tailcount ."' tail(s) so far <br>";
    } else {
        $tailcount++;
        echo "Attemp #". $flipcount . " Throwing a coin... It's a tail!... Got 
        '" . $headcount ."' head(s) so far and '". $tailcount ."' tail(s) so far <br>";
    }   
}
echo "FLIP - ". $flipcount ." HEAD - ". $headcount . " TAIL - ". $tailcount;

?>