<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9</title>
</head>
<body>
<?php
    $nome = 'Joao';
    $nome2 = 'Maria';

    if ($nome = $nome2){
        echo $nome.'Atribui valor = ';
    }else{
        echo $nome2.'Atribui valor = ';
    }
    echo '<br/>';

    $nome = 'Joao';
    $nome2 = 'Maria';

    if ($nome == $nome2){
        echo 'Verdadeiro == verifica se é igual';
    }else{
        echo 'Falso == verifica se é igual ';
    }
    echo '<br/>';

    $nome = 'Joao';
    $nome2 = 'Joao';

    if ($nome == $nome){
        echo 'Verdadeiro == verifica se é igual';
    }else{
        echo 'Falso == verifica se é igual';
    }
    echo '<br/>';

    $nome = 'Joao';
    $nome2 = 'Maria';

    if ($nome != $nome2){
        echo 'Verdadeiro porém usando sinal de != diferente';
    }else{
        echo 'Falso porém usando sinal de != diferente';
    }
    echo '<br/>';

    $valor = 10;
    $valor2 = '10';

    if ($valor == $valor2){
        echo 'Verdadeiro == ';
    }
    echo '<br/>';
    if ($valor === $valor2){
        echo 'Verdadeiro === Tipos diferentes';
    }else{
        echo 'Falso === Tipos diferentes';
    }
    echo '<br/>';



?>
<table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>