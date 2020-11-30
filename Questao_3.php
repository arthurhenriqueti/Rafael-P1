<!DOCTYPE html>
<html>
<head>
	<title>Questão 3</title>
</head>
<body>
	<p>
		<?php
			$a = 6;
			$b = 2;

			if($a > $b)
			{
				$temp = $a;
				$a = $b;
				$b = $temp;
			}
			echo $a + $temp;
		?>
	</p>

</body>
</html>