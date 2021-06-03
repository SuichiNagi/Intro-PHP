<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>
    <style>
        div{
            display: inline-block;
            width: 20px;
            height: 20px;
        }
        div.color_1{
            background-color: black;
        }
        div.color_2{
            background-color: red;
        }
        div.bg-color_1{
            background-color: rgb(255,255,224);
        }
        div.bg-color_2{
            background-color: rgb(85,107,47);
        }
    </style>
</head>
<body>
<?php $size1 = 25; ?>

<?php 
    for($j = 0; $j < $size1; $j++){ ?>
    <div>
<?php
        for($i = 0; $i < $size1; $i++){ ?>
            <div class='color_<?= ($i+$j)%2+1 ?>'></div>
<?php   }  ?>       
    </div>
<?php
    } ?>


    <?php $size2 = 25; ?>

<?php 
    for($x = 0; $x < $size2; $x++){ ?>
    <div>
<?php
        for($y = 0; $y < $size2; $y++){ ?>
            <div class='bg-color_<?= ($x+$y)%2+1 ?>'></div>
<?php   }  ?>       
    </div>
<?php
    } ?>
</body>
</html>