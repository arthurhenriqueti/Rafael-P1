<!DOCTYPE html>
<html>
<head>
	<title>Números Primos</title>
</head>
<body>
	<p>
	<?php

		echo "São números primos:" . '<br>';
		
		for($i=1; $i<=1000; $i++){
			$numeros = 0;
			for($j=$i; $j>=1; $j--){
				if(($i % $j) == 0){
					$numeros++;
				}
			}
			if($numeros == 2){
				echo $i . '<br>';
			}
		}
	?>
	</p>
</body>
</html>