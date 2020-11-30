<!DOCTYPE html>
<html>
<head>
	<title>Sessão 2</title>
</head>
<body>
	<p>
		<?php

			session_start();

			if(isset($_SESSION["acessos"])){
				$_SESSION["acessos"] = $_SESSION["acessos"] + 1;
			}
			else{
				$_SESSION["acessos"] = 1;
			}

				echo "Olá " . $_SESSION["usuario"] . ", sua sessão foi salva com sucesso!";
				echo "<br>";
				echo "Você acessou o site " . $_SESSION["acessos"] . " vezes!";

		?>
	</p>
</body>
</html>