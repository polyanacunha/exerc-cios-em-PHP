<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio13.php" method="GET">
        <label for="numero">Insira um número de 1 a 12:</label>
        <input type="number" name="numero">
        <button type="submit">enviar</button>
    </form>
    <?php
    $numero = @$_REQUEST['numero'];

    switch ($numero) {
        case '1':
            echo "janeiro";
            break;
        case '2':
         echo "fevereiro";
            break;
        case '3':
            echo "março";
            break;
        case '4';
            echo "abril";
            break;
        case '5':
            echo "maio";
            break;
        case '6':
            echo "junho";
            break;
        case '7':
            echo "julho";
            break;
        case '8':
            echo "agosto";
            break;
        case '9':
            echo "setembro";
            break;
        case '10':
            echo "outubro";
            break;
        case '11':
            echo "novembro";
            break;
        case '12':
            echo "dezembro";
            break;
        default:
            echo "insira um valor válido";
            break;
    }

?>
</body>
</html>