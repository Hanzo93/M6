<!DOCTYPE html>
<html>
<head>
	<title>Cadena més llarga i més curta</title>
</head>
<body>
	<?php  
		$array = ["abcd","abc","de","hjjj","g","wer"];
		$n = count($array);

		$min = 9999;
		$max = -1;
		for ($i=0; $i < $n; $i++) { 
			if (strlen($array[$i]) > $max) {
				$max = strlen($array[$i]);
			}
			if (strlen($array[$i]) < $min) {
				$min = strlen($array[$i]);
			}
		}

		echo "La cadena més llarga fa " . $max . " i la més curta fa " . $min;
	?>
</body>
</html>