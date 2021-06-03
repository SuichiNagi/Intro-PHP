<?php 

$number = rand(0,100);

$score = $number;

    for($i = 0; $i < 100; $i++){
        if($score >= "90"){
            echo "<h2>Your Score is ". $score. " /100 </h2> <br> <h3>Your grade is A.</h3>";
        } else if ($score >= "80"){
            echo "<h2>Your Score is ". $score. " /100 </h2> <br> <h3>Your grade is B.</h3>";
        } else if ($score >= "70"){
            echo "<h2>Your Score is ". $score. " /100 </h2> <br> <h3>Your grade is C.</h3>";
        } else {
            echo "<h2>Your Score is ". $score. " /100 </h2> <br> <h3>Your grade is D.</h3><br>";
        }
    }

?>