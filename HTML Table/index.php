<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML Table</title>
    
    <style>
        table{
            border: 1px solid black;
        }
        th,td{
            border: 1px solid black;
            padding: 10px;
        }

        th{
            font-size:18px;
        }

        td:nth-child(1){
            font-weight: bold;
        }

        tbody tr:nth-child(5n){
            background: black;
            color: white;
        }

        .bg-highlight {
            background: black;
            color: white;
        }
    </style>
    </head>
    <body>

    <?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel')
    );

    $table_head = array('User#', 'First Name', 
        'Last Name', 'Full Name', 
        'Full Name in uppercase', 
        'Length of full name (without spaces)');
    ?>

        <table>
            <thead>
    <?php for($i = 0; $i < count($table_head); $i++){?>
            <th><?=$table_head[$i]?></th>
    <?php } ?>
            </thead>
            <tbody>
    <?php foreach($users as $key => $value){
        $variable = "{$value['first_name']} {$value['last_name']}"; ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['first_name'] ?></td>
                    <td><?= $value['last_name'] ?></td>
                    <td><?= $variable ?></td>
                    <td><?= strtoupper($variable) ?></td>
                    <td><?= strlen(($value['first_name']).($value['last_name'])) ?></td>
                </tr>
    <?php } ?>
            </tbody>
        </table>
    </body>
</html>