<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<p>
		<?php

			setcookie("username", "Arthur");
			setcookie("cliente", "Juan");

			echo "Cookie setado!";

		?>
	</p>

</body>
</html>