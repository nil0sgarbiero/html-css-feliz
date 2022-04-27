
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>
<?php

$nome = array('Nilo','Joao','Macedo');
echo $nome[2];
echo '<br />';
$nome1[] = 'Joao';
$nome1[] = 'Lilo';

echo $nome1[0];
echo '<br/>';
echo $nome1[1];
echo '<br/>';

$nome1[100] = 'Matheus';
echo $nome1[100];
echo '<br/>';

$variaveis = ['Guilherme','Lula','Ramon'];
echo $variaveis[0];
echo '<br/>';
echo $variaveis[1];
echo '<br/>';
echo $variaveis[2];
echo '<br/>';

$var = array('Nome',20,true,10.0983);

echo $var[0];
echo '<br/>';
echo $var[1];
echo '<br/>';
echo $var[2];
echo '<br/>';
echo $var[3];
echo '<br/>';

$inf['Nome'] = 'Julio';
$inf['Idade'] = '25';
$inf['Cidade'] = 'Floripa';

echo $inf['Nome'];
echo '<br/>';
echo $inf['Idade'];
echo '<br/>';
echo $inf['Cidade'];
echo '<br/>';

?>
    
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>