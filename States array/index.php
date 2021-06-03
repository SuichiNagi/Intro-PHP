<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>States Array</title>
    </head>
    <body>
    <h2>Using for loop</h2>
    <select name="states">
        <option value="">Select</option>
        <?php 
            $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

            for($i = 0; $i < count($states); $i++){
                echo'<option value="'.$states[$i].'">'.$states[$i].'</option>';
            }
        ?>
    </select>

    <h2>Using foreach</h2>
    <select name="states">
        <option value="">Select</option>
        <?php 
            $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

            foreach($states as $value){
                echo'<option value="'.$value.'">'.$value.'</option>';
            }
        ?>
    </select>

    <h2>Using for loop</h2>
    <h3>Inserting new states</h3>
    <select name="states">
        <option value="">Select</option>
        <?php 
            $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
            array_push($states, 'NJ','NY','DE');

            for($i = 0; $i < count($states); $i++){
                echo'<option value="'.$states[$i].'">'.$states[$i].'</option>';
            }
        ?>
    </select>

    </body>
</html>