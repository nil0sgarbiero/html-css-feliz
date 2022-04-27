<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
<?php

    $arr = ['João','Pedro'];
    $arr = array('João','Pedro');

    $arr[0]='João';
    $arr[]='Pedro';

    //Multi

    $arr2 = array(array('João','Pedro'),array(23,25));

    echo $arr2[0][0];
    echo '<br/>';
    echo $arr2[1][0];
    echo '<br/>';
    echo '<hr>';
    echo 'Nome: '.$arr2[0][0].' Idade: '.$arr2[1][0];
    echo '<br/>';
    echo 'Nome: '.$arr2[0][1].' Idade: '.$arr2[1][1];

?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>