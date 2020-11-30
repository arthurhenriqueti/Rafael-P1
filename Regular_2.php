<!DOCTYPE html>
<html>
<head>
	<title>Regular 2</title>
</head>
<body>
	<p>
		<?php

			$ex = "/^[a-z]+$/";
			$texto = "arthur";

			echo preg_match($ex, $texto);

		?>
	</p>
</body>
</html>