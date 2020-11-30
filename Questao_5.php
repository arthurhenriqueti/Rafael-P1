<!DOCTYPE html>
<html>
<head>
	<title>Questão 5</title>
</head>
<body>
	<p>
		<?php
			$nota1 = 3;
			$nota2 = 3;
			$soma;

			$soma = $nota1 + $nota2;

			if($soma >= 6)
			{
				echo "Voce foi aprovado!";
			}
			else if($soma <= 5)
			{
				echo "Voce esta na final!";
			}
			else if($soma <= 1)
			{
				echo "Voce esta reprovado!";
			}
		?>
	</p>

</body>
</html>