<!DOCTYPE html>
<html>
<head>
	<title>Regular</title>
</head>
<body>
	<p>
		<?php

			$ex = "/cachorro/";

			echo preg_match($ex, "Eu vi um cachorro");

		?>
	</p>
</body>
</html>