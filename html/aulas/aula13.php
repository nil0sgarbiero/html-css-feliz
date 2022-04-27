<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
<?php

    $arr = array('Julio','Matheus','Joao','Maria');

    foreach($arr as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
    }
    echo '<br/>';

    $total = count($arr);

    for($i=0; $i<$total; $i++){
        echo $arr[$i];
        echo '<br/>';
    }

?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>
