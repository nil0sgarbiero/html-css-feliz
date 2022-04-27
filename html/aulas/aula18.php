<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18</title>
</head>
<body>
<?php 

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque 
    maximus enim a gravida. Nulla commodo vulputate mauris non imperdiet. Duis maximus lectus facilisis 
    ex mollis accumsan. Cras fringilla ullamcorper neque vitae vestibulum. Fusce et ex orci. Proin vitae 
    mattis leo. Sed volutpat luctus luctus. Donec imperdiet congue urna a tempor. Praesent gravida magna 
    quam, at finibus odio varius ac. Aenean malesuada, erat et luctus elementum, purus augue hendrerit 
    velit, at efficitur ex felis id nulla. Fusce eget gravida velit. Ut libero risus, euismod a neque ut,
    dapibus elementum tellus. ';

    echo substr($conteudo,0,20);
    echo '<hr>';

    $nome = 'Nilo Aguiar Sgarbiero';

    $nomes = explode(' ',$nome);

    print_r($nomes);

    echo '<hr>';

    $nomes = implode(' ',$nomes);

    echo $nomes;

    echo '<hr>';

    $string = '<h1>Teste</h1>';

    echo $string;
    echo '<br/>';
    echo strip_tags($string);

    echo '<hr>';

    echo htmlentities('<div><h1>DIV</h1></div>');


?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>