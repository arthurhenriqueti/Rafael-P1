<!DOCTYPE html>
<html>
<head>
	<title>Questão 2</title>
</head>
<body>
	<h1>Questão 2</h1>
        <form action="Questao2Prova.php" method="post">
            <fieldset>
                <legend>Questão 2:</legend>
                <label>
                    Digite um número:
                    <input type = "text" name="num"/>
                </label>
            <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
	<p>
        <?php

            $i = $_POST['num'];
            $calc = 1;

            if($i > 20){
                echo "Digite um numero: (1 à 20)";
            }
                else{
                    while ($i > 1){
                        $calc *= $i;
                        $i--;
                        
                    }
                    echo " " . $calc;
                }
            ?>
	</p>

</body>
</html>