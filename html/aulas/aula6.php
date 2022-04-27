
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6</title>
</head>
<body>
<?php
    $frase= 'Meu Nome é ';
    $nome = 'Maria';
    $idade = 10;
    $nclasse = 'box';
    define('NOME','Jordan');
    echo 'Meu Nome é '.$nome;
    echo '<br/>';
    echo 'Minha idade é '.$idade;
    echo '<br/>';
    echo 'Meu nome é '.$nome.' e minha idade é '.$idade;
    echo '<br/>';
    echo '<br/>';
    echo 'Meu nome é '.NOME;
    echo '<br/>';
    echo $frase.NOME;
    echo '<br/>';
    echo $frase.$nome.$idade;
    echo '<br/>';
    
    echo "<div class=\"$nclasse\">Meu conteudo da div</div>";


?>
    
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>