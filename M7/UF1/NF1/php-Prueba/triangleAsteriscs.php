<!DOCTYPE html>
<html>
<head>
	<title>Triangle d'Asteriscs</title>
</head>
<body>
	<?php  
		for ($i=0; $i < 5; $i++) { 
			for ($j=0; $j <= $i; $j++) { 
				echo "* ";
			}
			echo "<br>";
		}

		for ($i=5; $i >= 0; $i--) { 
			for ($j=0; $j < $i; $j++) { 
				echo "* ";
			}
			echo "<br>";
		}
	?>
</body>
</html>