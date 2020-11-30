<!DOCTYPE html>
<html>
<head>
	<title>Aula 5</title>
</head>
<body>
	<p>
		<?php
		$contador = 1;
		$tabuada = 7;

		while($contador <= 10)
		{
			echo $tabuada . " x " . $contador . " = " . ($tabuada*$contador);
			echo "<br>";
			$contador++;
		}
		?>
	</p>

</body>
</html>