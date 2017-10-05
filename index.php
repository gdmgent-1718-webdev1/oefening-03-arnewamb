<?php

$x = 10;
$y = 7;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    	p{
    		color: red;
    		font-family: helvetica;
    		text-align: center;

    	}

    	.waarden{
    		margin-top: 200px;
    	}
    </style>
</head>
<body>


<form>
	<input type="search" name="q">
	<input type="submit" value="search">
</form>
<div class="waarden">
<p><?php echo $x + $y; ?></p>
<p><?php echo $x - $y; ?></p>
<p><?php echo $x * $y; ?></p>
<p><?php echo $x / $y; ?></p>
<p><?php echo $x % $y; ?></p>
</div>




</body>
</html>


