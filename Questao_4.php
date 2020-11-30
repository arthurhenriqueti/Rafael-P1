<!DOCTYPE html>
<html>
<head>
	<title>Questão 4</title>
</head>
<body>
	<p>
		<?php
			$caixa_eletronico = "Deposito";

			switch ($caixa_eletronico) {
				case "Saque":
					echo "Voce selecionou realizar um saque!";
					break;
				case "Deposito":
					echo "Voce selecionou realizar um deposito!";
					break;
				case "Transferencia":
					echo "Voce selecionou realizar uma transferencia!";
					break;
				default:
					echo "Nada foi selecionado!";
					break;
			}

		?>
	</p>

</body>
</html>