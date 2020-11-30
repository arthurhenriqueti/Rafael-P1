<!DOCTYPE html>
<html>
<head>
	<title>Questão 1</title>
</head>
<body>
	<p>
		<?php
			$tempo;
			$horas;
			$horas_segundos;
			$minutos;
			$segundos;

			$horas = ($tempo/$horas_segundos);
			$minutos = ($tempo -($horas_segundos * $horas))/60;
			$segundos = ($tempo -($horas_segundos * $horas) - ($minutos * 60));

			echo $horas , $minutos , $segundos;
		?>
	</p>

</body>
</html>