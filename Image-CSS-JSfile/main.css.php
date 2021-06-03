<?php
    header('Content-type: text/css');
    
    $random_color = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

    $rand_size = rand(10, 30);

    $color_attr = array("green", "blue", "red", "black");

    $color_rand = $color_attr[rand(0, count($color_attr)-1)];
?>

h1{ 
    color: <?php echo('#' . $random_color); ?>
}
p { 
    color: <?php echo $color_rand.";" ?>
    font-size: <?php echo $rand_size."px" ?>
}

