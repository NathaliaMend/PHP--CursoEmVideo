<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é igual a " .number_format ($rq, 3);
    ?>
    <a href="Aula-8.html">Voltar</a>
</div>
</body>
</html>