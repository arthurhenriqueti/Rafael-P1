<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	    <h1>Questão da Prova</h1>
        <form action="Questao3Prova.php" method="post">
            <fieldset>
                <legend>Questão 3</legend>
                <label>
                    <input type = "text" name="num"/>
                </label>
            <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
	<p>
		<?php

                $n = $_POST['num'];
                $soma;

                if($n > 9999){}
                	else{
                		while ($n != 0){
                    		$sobra = $n % 10;
                    		$n = ($n - $sobra) / 10;
                    		$soma = $soma + $sobra;
                }
                echo " " . $soma;
            }
			?>
	</p>

</body>
</html>