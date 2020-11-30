<html>
 <body>
    <form action='phpbd.php' method ='post'>
        Aluno:<input type='text' name='nome'>
        RGM:<input type='number' name='rgm'>
        Faltas:<input type='number' name='faltas'>
        Nota:<input type='number' step=any name='Notas'>
        <input type="Submit" values= "Enviar">
    </form>
 </body>
</html>

<?php

$conexao = mysqli_connect('127.0.0.1','root',"","p1cc_db");

if(mysqli_connect_errno($conexao))
{
    echo "Erro: " . mysqli_connect_error();
}

else

phpbd
{
rgm
    echo "Conexao foi iniciada <br>";
    $nome = $_POST['nome'];
    $RGM =  $_POST['rgm'];
    $falta = $_POST['faltas'];
    $nota = $_POST['Notas'];
    
    $queries = "INSERT INTO alunos VALUES('$nome', $RGM, $falta , $nota)";

    if(mysqli_query($conexao, $queries))
    {
        echo "O conteudo foi adicionado!";
    }
    else{
        echo "Erro: " . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}






?>

21:03

<html>
 <body>
    <form action='phpbd.php' method ='post'>
        Aluno:<input type='text' name='nome'>
        RGM:<input type='number' name='rgm'>
        Faltas:<input type='number' name='faltas'>
        Nota:<input type='number' step=any name='Notas'>
        <input type="Submit" values= "Enviar">
    </form>
 </body>
</html>

<?php

$conexao = mysqli_connect('127.0.0.1','root',"","p1cc_db");

if(mysqli_connect_errno($conexao))
{
    echo "Erro: " . mysqli_connect_error();
}

else
{

    echo "Conexao foi iniciada <br>";
    $nome = $_POST['nome'];
    $RGM =  $_POST['rgm'];
    $falta = $_POST['faltas'];
    $nota = $_POST['Notas'];
    
    $queries = "INSERT INTO alunos VALUES('$nome', $RGM, $falta , $nota)";

    if(mysqli_query($conexao, $queries))
    {
        echo "O conteudo foi adicionado!";
    }
    else{
        echo "Erro: " . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}






?>
