
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8</title>
</head>
<body>
<?php

$variavel1 = 'Marcelo';
$variavel2 = 'Guilherme';

if ($variavel1 == $variavel2) {
    echo '<div style="width:300px;height:300px;background:red;"></div>';
}else{
    echo 'A Condição não bate';
}
echo '<br/>';
$variavel1 = 'Joao';
$variavel2 = 'Joao';

if ($variavel1 == $variavel2) {
    echo '<div style="width:300px;height:300px;background:red;"></div>';
}else{
    echo 'A Condição não bate';
}

echo '<br/>';
$var= 5+10;
$var1= '5 + 10';
if ( $var == $var1){
    echo 'verdade';
}else if ($var != $var1){
    echo 'verdade else if';
}else{
    echo 'falso';
}

?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>