<!DOCTYPE html>
<html>
<head>
	<title>Foreach</title>
</head>
<body>
	<p>
		<?php

			$nomes = array("Rafael", "Vieira");
			$index;

			foreach($nomes as $conteudo){
				echo $conteudo . "<br>";
			}

			/* for($index=0; $index < count($nomes); $index++){
				echo $nomes[$index] . "<br>";
			}
			*/
		?>
	</p>

</body>
</html>