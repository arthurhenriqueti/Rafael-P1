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

		for ($contador = 1; $contador <= 10; $contador++)
		{
			echo $tabuada . " x " . $contador . " = " . ($tabuada*$contador);
			echo "<br>";
		}
		?>
	</p>

</body>
</html>