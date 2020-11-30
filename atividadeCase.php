<!DOCTYPE html>
<html>
<head>
	<title>Programa teste</title>
</head>
<body>
	<p>
		<?php
			$menu = "Home";

			switch($menu)
			{
				case "Home": echo "Selecionou Home";
				break;
				echo "<br>";
				case "Sobre": echo "Selecionou Sobre";
				break;
				echo "<br>";
				case "Novas": echo "Selecionou Novas";
				break;
				echo "<br>";
				case "Login": echo "Selecionou Login";
				break;
				echo "<br>";
				case "Cadastrar": echo "Selecionou Cadastrar";
				break;
				default:
					echo"Não há opção!";
			}
			//Operador ternario Sim           Não / Se for e se não for!
			echo $menu == "home" ? "Bem-vindo" : "Oi"; 
			
		?>
	</p>

</body>
</html>