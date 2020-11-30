<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Atividade Questão 5</title>
    </head>
    <body>
        <h1>Atividade Questão 5</h1>
        <form action="pascal.php" method="get">
            <fieldset>
                <legend>Itens</legend>
                <label>
                    Digite um número (0 - 3):
                    <input type = "text" name="pot"/>
                </label>
            <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
        <p>
        <?php

        $nrow = 4;
        $express = array("", "x", "x<sup>2</sup>", "x<sup>3</sup>", "x<sup>4</sup>", "x<sup>5</sup>", "x<sup>6</sup>", "x<sup>7</sup>");
        $triangulo = array(
                            array(0,0,0,0,0,0,0,0), 
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0),
                            array(0,0,0,0,0,0,0,0)
                        );

        if(isset($_GET['pot'])){
            $pot = $_GET['pot'];

                for($i = 0; $i <= $nrow; $i++){
                    $triangulo[$i][0] = 1;
                    for($j = 1; $j < $nrow; $j++){
                        if($i > 0 && $j > 0){
                            $triangulo[$i][$j] = $triangulo[$i-1][$j-1] + $triangulo[$i-1][$j];
                        }
                    }
                }
                
                echo "Triângulo de Pascal: <br>";

                for($i = 0; $i < $nrow; $i++){
                    for($j = 0; $j <= $i; $j++){
                        echo $triangulo[$i][$j];
                    }
                    echo "<br>";
                }

                echo "<br>Calculando binômio de Newton: <br>";

                echo "(x + 1)^" . $pot . " = ";

                for($i = 0; $i <= $pot; $i++)
                    echo " + " . $triangulo[$pot][$i] . $express[$i];
                    //echo $triangulo[$pot+1][$i] . $express[$i] . " + ";
                }          
                else
                {
                    echo "Não existe dado enviado";
                } 
        ?>
        </p>
    </body>
</html>