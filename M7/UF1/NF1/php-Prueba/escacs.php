<!DOCTYPE html>
<html>
<head>
	<title>Escacs</title>
</head>
<body>
	<?php
		echo "<table width=\"270px\">";  
		for ($i=0; $i < 8; $i++) {
			echo "<tr>"; 
			for ($j=0; $j < 8; $j++) {
				if ((($i%2 == 0) && ($j%2 == 0)) || (($i%2 != 0) && ($j%2 != 0)) ) {
					echo "<td style=\"background-color:black; width:17px; height: 17px\"></td>";
				} else {
					echo "<td></td>";
				}
				
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>