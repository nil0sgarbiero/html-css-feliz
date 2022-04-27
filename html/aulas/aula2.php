<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
        echo $_SERVER['SERVER_NAME'];
        printf(' - ');
        echo '<pre>';
        print_r($_SERVER);
        echo'</pre>';
    
    ?>
    <table>
        <tr>
            <td><a href="index.php">Voltar Página</a></td>
        </tr>
    </table>
</body>
</html>