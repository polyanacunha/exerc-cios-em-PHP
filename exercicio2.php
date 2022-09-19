<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio2.php" method="POST">
<label for="numero1">Digite o primeiro número:</label>
<input type="number" name="numero1">

<label for="numero2">Digite o segundo número:</label>
<input type="number" name="numero2">

<label for="numero3">Digite o terceiro número:</label>
<input type="number" name="numero3">
<button type="submit">enviar</button>
</form>


    <?php 
       $num1 = @$_REQUEST['numero1'];
       $num2 = @$_REQUEST['numero2'];
       $num3 = @$_REQUEST['numero3'];

       echo "o maior número é: " . max($num1, $num2, $num3)  ."<br>" ;
       echo "o menor número é: " . min($num1, $num2, $num3);
      
      
?>
</body>
</html>