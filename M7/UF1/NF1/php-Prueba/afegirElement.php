<!DOCTYPE html>
<html>
<head>
	<title>Afegir Element a un Array</title>
</head>
<body>
	<?php 
	echo "Abans: ";
	$array = [1, 2, 3, 4, 5];
	$n = count($array);
	for ($i=0; $i < $n; $i++) { 
		echo "" . $array[$i];
	}
	echo "<br>Despres: ";
	array_splice($array, 3, 0, "$");
	$n = count($array);
	for ($i=0; $i < $n; $i++) { 
		echo "" . $array[$i];
	}
	?>
</body>
</html>