<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="exercicio1.php" method="GET">
     <label for="numero"> digite o primeiro número </label>  
     <input type="number" name="numero1" >
     <label for="numero">digitew o segundo número</label>
     <input type="number" name="numero2" >
     <button>enviar</button>
    </form>
 

    <?php 
    $numero1 = @$_REQUEST['numero1'];
    $numero2 = @$_REQUEST['numero2'];
    $soma = $numero1 + $numero2;

    if($soma > 20){
        print $soma += 8;
    }elseif($soma < 20){
        print $soma -= 5;
    }else { 
        "digite um número válido";
    }
     

    ?>
</body>
</html>