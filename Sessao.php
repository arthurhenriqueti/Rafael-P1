<!DOCTYPE html>
<html>
<head>
	<title>Sessão</title>
</head>
<body>
	<p>
		<?php

			session_start();

			$_SESSION["usuario"] = "Arthur";
			$_SESSION["senha"] = "123";

		?>
	</p>

</body>
</html>