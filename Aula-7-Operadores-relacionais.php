<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparacoes</title>
</head>
<body>
<div>
    <?php
    # Operadores relacionais, como utilizá-los?

#MAIOR:
//$a > $b;

#MENOR:
//$a < $b;

#MAIOR OU IGUAL:
//$a >= $b;

#MENOR OU IGUAL:
//$a <= $b;

#DIFERENTE:
//$a <> $b; /*OU*/ $a != $b;

#IGUAL:
//$a == $b; /*Significa que é igual e que pode ter tipos diferentes*/

#IDÊNTICO / EXATAMENTE IGUAL
//$a === $b; /*Significa que é igual e do mesmo tipo*/


       ## OPERADOR UNÁRIO:
//exemplo
//expressao ? verdadeiro : falso
//$maior = $a > $b ? $a : $b;

// outro exemplo
//$r = $a > $b ? $a + $b : $a - $b; # se a variavel a for maior que a variavel b, a variavel r recebe $a + $b, se nao ela receberá $a - $b.

//outro
//$situacaodoaluno = $media < 7 ? "Recuperação" : "Aprovado"; # se a media for menor que 7 a variavel situacaodoaluno recebe a string recuperacao , se nao , ela receberá a string aprovado.

         ### EXERCICIO
//Permitir que o usuário escolha entre somar e multiplicar dois numeros
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];
echo "Os valores passados foram $n1 e $n2 </br>";

$r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
echo "O resultado sera $r";

?>
</div>
</body>
</html>