<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Programação Web - Formulario</title>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action = "Compras.php" method="GET">
			<fieldset>

				<legend>Informações de Cadastro</legend>
				<LABEL>
					Nome:
					<input type="text" name="nome">
				</LABEL>
				<br>
				<br>

				<LABEL>
					Sobrenome: 
					<input type="text" name="sobrenome">
				</LABEL>
				<br>
				<br>

				<LABEL>
					Cidade:
					<input type="text" name="cidade">
				</LABEL>
				<br>
				<br>

				<LABEL>
					Telefone:
					<input type="text" name="telefone">
				</LABEL>
				<br>
				<br>

				<LABEL>
					Esporte:
					<input type="text" name="esporte">
				</LABEL>
				<br>
				<br>

				<input type="submit" value="Enviar">
			</fieldset>
		</form>
		<p>
			<?php

				if (!empty($_GET['nome']) || !empty($_GET['sobrenome']) || !empty($_GET['cidade']) || !empty($_GET['telefone']) || !empty($_GET['esporte'])){

					echo $_GET['nome'] . "<br>" . $_GET['sobrenome'] . "<br>" . $_GET['cidade'] . "<br>" . $_GET['telefone'] . "<br>" . $_GET['esporte'] . "<br>";
					
				} else {

					echo "EOQ";
				}

			?>
		</p>
	</body>
</html>