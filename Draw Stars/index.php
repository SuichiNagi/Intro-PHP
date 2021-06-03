<?php 

$x = array(4, 6, 1, 3, 5, 7, 25);

echo "<h1>Draw Stars Pt.1</h1>";
function draw_stars($arr){
    for($i = 0; $i < count($arr); $i++){
        for($j = 0;$j < $arr[$i]; $j++){
            echo "*";
        }
        echo "<br>";
    }
}

draw_stars($x);

$z = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

echo "<h1>Draw Stars Pt.2</h1>";
function draw_stars_part2($arr){
    $temp = "";

    for($i = 0; $i < count($arr); $i++){
        $firstLetter = is_string($arr[$i]) ? [strlen($arr[$i]), strtolower(substr($arr[$i], 0,1))] : [$arr[$i], '*'];
        for($j = 0; $j < $firstLetter[0]; $j++){
            $temp .= $firstLetter[1];
        }
        $temp .= "</br>";
    }
    echo $temp;
}

draw_stars_part2($z);

$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

echo "<h1>Draw Stars Pt.2v2</h1>";
function draw_stars_part3($arr){

    for($i = 0; $i < count($arr); $i++){
        if(is_string($arr[$i])){
            $firstLetterName = substr($arr[$i], 0,1);
            $lengthName = strlen($arr[$i]);
            for($k = 0; $k < $lengthName; $k++){
                echo strtolower($firstLetterName);
            }
        }
        for($j = 0; $j < $arr[$i]; $j++){
            echo "*";
        }
        echo "<br>";
    }
}

draw_stars_part3($y);

?>