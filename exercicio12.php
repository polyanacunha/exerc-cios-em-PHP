<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio12.php" method="GET">
        <label for="letra">Insira a letra</label>
        <input type="text" name="letra">
        <button type="submit">enviar</button>
    </form>

    <?php
   $letra = @$_REQUEST['letra'];

   switch ($letra) {
    case 'a':
        echo "é uma vogal";
        break;
    case 'e':
        echo "é uma vogal";
        break;
    case 'i':
        echo "é uma vogal";
        break;
    case 'o':
        echo "é uma vogal";
        break;
    case 'u':
        echo "é uma vogal";
        break;
    default:
      echo "é uma consoante";
        break;
   }

?>
</body>
</html>