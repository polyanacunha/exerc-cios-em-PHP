<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio6.php" method="GET">
        <h1>Calcular dinheiro gasto por um fumante.</h1>
        <label for="anos">Digite, em anos, por quanto tempo ele fumou: </label>
        <input type="number" name="anos">

        <label for="cigarrosPorDia">Insira a quantidade de cigarros fumados por dia: </label>
        <input type="number" name="cigarrosPorDia">

        <label for="precoCartela">Indira o preço de uma cartela de cigarro.</label>
        <input type="number" name="precoCartela">
        <button type="submit">calcular</button>
    </form>

    <?php
     $anos = @$_REQUEST['anos'];
     $cigarrosPorDia = @$_REQUEST['cigarrosPorDia'];
     $precoCartela = @$_REQUEST['precoCartela'];

     $anosParaDias = $anos * 365;
     $totalCigarros = $anosParaDias * $cigarrosPorDia;

    // como contém 20 cigarros em cada cartela, dividiremos por 20.
     $totalCartelas = $totalCigarros / 20;
     $gastoTotal = $totalCartelas * $precoCartela;
     
     echo "o valor gasto pelo fumante foi de " . number_format($gastoTotal, 2) . " reais."


    ?>
</body>

</html>