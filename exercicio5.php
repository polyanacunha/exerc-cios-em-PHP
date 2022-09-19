<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio5.php">
        <h1>Cálculo do gasto com gasolina.</h1>
        <label for="distancia">Insira a distância percorrida em km: </label>
        <input type="number" name="distancia">

        <label for="kmPorLitro">Insira qual é o consumo do seu carro em km/l :</label>
        <input type="number" name="kmPorLitro">

        <label for="preco">Insira o valor do preço da gasolina :</label>
        <input type="number" name="preco">

        <button type="submit">calcular</button>
    </form>

    <?php 
      $distancia = @$_REQUEST['distancia'];
      $kmPorLitro = @$_REQUEST['kmPorLitro'];
      $preco = @$_REQUEST['preco'];

      $litrosGastos = $distancia / $kmPorLitro;
      $gastoTotal = $litrosGastos * $preco;

      echo " Maria vai gastar " . number_format($gastoTotal, 2) . " reais com combustível". "e vai precisar de " . number_format($litrosGastos, 2) . " litros de gasolina.";


?>
</body>
</html>