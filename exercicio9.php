<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio9.php" method="GET">
       <label for="a">Insira o primeiro número:</label>
       <input type="number" name="a">

       <label for="b">Insira o segundo número:</label>
       <input type="number" name="b">

       <select name="operacoes" id="operacoes">
        <option value="soma">soma</option>
        <option value="subtracao">subtracao</option>
        <option value="multiplicacao">multiplicacao</option>
        <option value="divisao">divisao</option>
        </select>
        <button type="submit">enviar</button>
    </form>

    <?php
     $a = @$_REQUEST['a'];
     $b = @$_REQUEST['b'];
     $operacoes = @$_REQUEST['operacoes'];

     switch ($operacoes) {
        case 'soma': 
          $soma =  $a + $b;
            echo $soma;
            break;
        
        case 'subtracao' :
            $subtracao = $a - $b;
            echo $subtracao;
            break;

        case 'multiplicacao':
            $multiplicacao = $a * $b;
            echo $multiplicacao;
        case 'divisao' :
            $divisao = $a / $b;
            echo $divisao;
            break;
        default:
            echo "insira um valor válido.";
            break;
     }

?>
</body>
</html>