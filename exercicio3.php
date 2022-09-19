<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio3.php" method="GET">

 <h1>Tabuada</h1>
 <label for="numero">Insira um número: </label>
 <input type="number" name="numero">
 <button type="submit">gerar tabuada</button>
    </form>
    <?php
      $numero = @$_REQUEST['numero'];

      for( $i=1; $i<=10; $i++ ){
            $calculo = $numero * $i;
            print $numero . "x" . $i . "=" . $calculo . "<br>";
      }



?>
</body>
</html>