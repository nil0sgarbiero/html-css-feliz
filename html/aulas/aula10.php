<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
<?php

    $numero1 = 10;
    $numero2 = 12;

    if ($numero1 < $numero2){
        echo 'Verdadeiro';
    }
    echo '<br/>';
    if ($numero1 <= $numero2){
        echo 'Verdadeiro';
    }
    echo '<br/>';

    $numero1 = 15;
    $numero2 = 10;

    if($numero1 > $numero2){
        echo 'Verdadeiro';
    }
    echo '<br/>';
    if ($numero1 >= $numero2){
        echo 'Verdadeiro';
    }
    echo '<br/>';

    $var1 = 'Valor1';
    $var2 = 'Valor1';
    $var3 = 'Valor1';

    if (($var1==$var2) && ($var2 == $var3)){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    }
    echo '<br/>';

    $var1 = 'Valor1';
    $var2 = 'Valor2';
    $var3 = 'Valor1';

    if (($var1==$var2) || ($var1 == $var3)){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
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