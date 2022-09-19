<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio4.php" method="GET">  <div id="expressao" action="exercicio4.php" method="GETS">
    <label for="numero1">Digite o primeiro número:</label>
    <input type="number" name="a">

    <label for="numero2">Digite o segundo número:</label>
    <input type="number" name="b">

    <label for="numero3">Digite o terceiro número:</label>
    <input type="number" name="c">
    <button type="submit">enviar</button>
</form>
 <?php
$a = @$_REQUEST['a'];
$b = @$_REQUEST['b'];
$c = @$_REQUEST['c'];
$calculo = ($a-$b) * $c;

echo $calculo;


?>
</body>
</html>