<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <div>
        <?php
        ## Maneiras de simplificar:
$a = 1; // a recebe 1
$b = 3; // b recebe 3
$c = $a + $b ; // c recebe o resultado de a + b
$c = $c + 5; /*OU*/ $c += 5; // c recebe +5 . O resultado é o valor de c mais cinco.

$b = $b + $a; /*OU*/ $b += $a; // b recebe + a . o resultado é o valor do b mais o valor do a.
$a = $a + 1; /*OU*/  $a += 1; /*OU*/ $a++; // a recebe o valor dele mesmo mais 1.
        ?>
</div>
</body>
</html>