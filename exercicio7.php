<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio7.php" method="GET">
        <label for="linhas">Insira o número de linhas: </label>
        <input type="number" name="linhas">

        <label for="colunas">Insira o número de colunas: </label>
        <input type="number" name="colunas">

        <label for="conteudo">insira o conteúdo: </label>
        <input type="text" name="conteudo">
        <button type="submit">enviar</button>
    </form>


    <?php

      $linhas = @$_REQUEST['linhas'];
      $colunas = @$_REQUEST['colunas'];
      $conteudo = @$_REQUEST['conteudo'];

      print '<table border= "1">'; 
      for($i=1; $i <= $linhas; $i++){
        print '<tr>';
        for($j=1; $j<=$colunas; $j++){
             print '<td>';
             print $conteudo;
             print'</td>';
        }
        print '</tr>';
      }
      print '</table>';  
?>
</body>
</html>