<!DOCTYPE html>
<html>
<head>
	<title>Programa teste</title>
</head>
<body>
	<p>
		<?php
			define ("texto" , "O valor é de R$: ");

			$salarioBruto = 1500;
			$salarioLiquido;
			$imposto;

			if($salarioBruto < 1000)
			{
				$imposto = $salarioBruto*0.05;
			}
			elseif($salarioBruto >= 1000)
			{
				$imposto = $salarioBruto*0.11;
			}
			elseif($salarioBruto >= 5000)
			{
				$imposto = $salarioBruto*0.35;
			}
			$salarioLiquido = $salarioBruto - $imposto;
			echo texto . "Bruto : <strong> <i>" . $salarioBruto . "</strong> </i>";
			echo "<br>";
			echo texto . "Liquido : <strong> <i>" . $salarioLiquido . "</strong> </i>";
			echo "<br>";
			echo texto . "Imposto : <strong> <i>" . $imposto . "</strong> </i>";
		?>
	</p> 
</body>
</html>