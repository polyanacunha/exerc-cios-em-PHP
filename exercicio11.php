<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio11.php" method="GET">
    <h1>Par ou ímpar?</h1>
    <label for="numero">Insira um número.</label>
    <input type="number" name="numero">
    <button type="submit">enviar</button>
    </form>
    <?php
    $numero = @$_REQUEST['numero'];

    if(($numero % 2) === 0){
     echo "é par";

    } else {
        echo "é ímpar";
    }

?>
</body>
</html>