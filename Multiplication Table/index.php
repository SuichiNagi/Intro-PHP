<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Multiplication Table</title>
		<style>
			table{
				border: 1px solid black;
			}
				td{
					text-align: center;
					height: 30px;
					width: 30px;
					padding: 5px;
					border: 2px solid black;
				}
				td:nth-child(1){
					font-size: 25px;
					font-weight: bold;
				}
				tr:nth-child(1){
					font-size: 25px;
					font-weight: bold;
				}
		</style>
	</head>
	<body>
		<table>
	
<?php for($i=1; $i<=9; $i++)
        { ?>
<?php if($i % 2 != 0){
		echo '<tr bgcolor="grey">';
		} ?>
<?php    for($j=1; $j<=9; $j++)
        { ?>
        <td><?= $i * $j ?></td>		
<?php    } ?>
        </tr> 
<?php } ?>
		</table>

	</body>
</html>

