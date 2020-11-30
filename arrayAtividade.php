<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Programação WEB</title>
    </head>
    <body>
        <p>
            <?php
            
                $presente = array();

                for($i = 0; $i < 100; $i++)
                {
                    $presente[$i] = $i+1;
                }

                for($i = 0; $i < 100; $i++)
                {
                  echo "O " . $presente[$i] . "° elemento é: <strong>" . $presente[$i] . "</strong><br>";
                }

            ?>
        </p>

     </body>
</html>