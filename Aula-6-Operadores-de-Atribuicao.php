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


       ## Operadores de atribuicao:
#adicao:
$a = $a + $b;  /*é igual a ->*/ $a += $b;
# subtracao:
$a = $a - $b; /*é igual a ->*/ $a -= $b;
#multiplicacao:
$a = $a * $b; /*é igual a ->*/ $a *= $b;
#divisao:
$a = $a / $b; /*é igual a ->*/ $a /= $b;
#modulo:
$a = $a % $b; /*é igual a ->*/ $a %= $b;
#concatenacao:
$a = $a . $b; /*é igual a ->*/ $a .= $b;  #(concatenar é juntar strings)


       ### Exercicio --> Aplicando 10% de desconto no preço de um produto:
$preco = $_GET ["p"];
 echo "O preço do produto é R$ " .number_format($preco, 2, ",", ".");

 $preco -= $preco*10/100; # igual a -> $preco = $preco - ($preco*10/100); 
 echo "</br>O novo preço com 10% de desconto será de R$ " .number_format($preco, 2, ",", ".");


        ?>
</div>
</body>
</html>