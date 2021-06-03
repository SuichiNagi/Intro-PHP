<?php 

$random_num = rand(0,100);

$array_num = array(10, 20, 30, 40, 50, 60);

$random_num2 = $array_num[rand(0, count($array_num)-1)]
?>


$(document).ready(function(){
  alert('<?=$random_num2?> * <?=$random_num?>' );
  alert(<?=$random_num2?> * <?=$random_num?> );
});
