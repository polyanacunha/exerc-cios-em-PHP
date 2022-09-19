<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio8.php" method="GET">
        <label for="cpf">Insira seu CPF:</label>
        <input type="number" name="cpf">

        <label for="dependentes">Insira o número de dependentes: </label>
        <input type="number" name="dependentes">

        <label for="renda">Insira sua renda Mensal: </label>
         <input type="number" name="renda">
         <button type="submit">calcular</button>
    </form>

    <?php
    $cpf = @$_REQUEST['cpf'];
    $dependentes = @$_REQUEST['dependentes'];
    $renda = @$_REQUEST['renda'];
    $salarioMin = 1212;
    $tresSalarios = $salarioMin * 3;
    $quatroSalarios = $salarioMin * 4;
    $cincoSalarios = $salarioMin * 5;
    $seisSalarios = $salarioMin * 6;

    if($dependentes > 0 ){
        $desconto = $dependentes * ((5/100) * $salarioMin); 
        $salarioFinal = $renda - $desconto;
    if ($salarioFinal < $tresSalarios ){
  print " O usuário de CPF " . $cpf ." está isento de imposto de renda.";
    } else if( $salarioFinal >= $tresSalarios) {
        $imposto7 = (7/100) * $salarioFinal;
        print "o imposto de renda do usuário de CPF " . $cpf ." é de : " . $imposto7;
    } else if ( $salarioFinal >= $quatroSalarios){
        $imposto15 = (15/100) * $salarioFinal;
     print "o imposto de renda do usuário de CPF " . $cpf ." é de: "  . $imposto15;
    } else if($salarioFinal >= $cincoSalarios){
        $imposto22 = (22/100) * $salarioFinal;
        print "o imposto de renda do usuário de CPF " .$cpf. " é de: ". $imposto22;
    } else if($salarioFinal > $seisSalarios){
        $imposto27 = (27/100) * $salarioFinal;
        print "o imposto de renda do usuário de CPF " . $cpf. " é de: " . $imposto27; 
    } else { 
        print "Insira um valor válido";
    }
}

?>
</body>
</html>