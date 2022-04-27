<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
<?php

    for($contador=0;$contador>10;$contador++){
        echo 'Olá mundo FOR';
        echo '<hr>';

    }

    $contador=0;
    for($contador=10;$contador>0;$contador--){
        echo 'Olá mundo FOR2';
        echo '<br/>';
        echo $contador;
        echo '<hr>';
        
    }

    $contador=0;
    while($contador<10){
        echo 'Olou mundo While';
        echo '<br/>';
        $contador+=1;
    }
    echo '<hr>';
    
    $contador=11;
    do{
        echo 'Olá mundo DO False';
        echo '<br/>';
    }while($contador==10);
    echo '<hr>';

    $contador=0;
    do{
        echo 'Olá mundo DO Verdadeiro';
        echo '<br/>';
    }while($contador>10);

?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>