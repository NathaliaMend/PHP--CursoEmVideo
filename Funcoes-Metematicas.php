<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas em PHP</title>
    <style> 
         h2 {
            font: 15pt arial ;
            color: #171559;
            font-weight: bold;
         }
    </style>
</head>
<body>
    <div>
    <?php
    # Funcoes matematicas:
 #Recebendo/pegando valores:
    $v1 = $_GET ["x"];
    $v2 = $_GET ["y"];
  echo "<h2>Valores recebidos: $v1 e $v2 </h2>";

//    abs( ) -> serve para pegar o Valor absoluto de uma variavel
  echo "O valor absoluto de $v2 é " .abs($v2);
//    pow ( ) -> potenciacao
  echo "</br>O valor de $v1<sup>$v2</sup> é " .pow($v1, $v2) ;
//    sqrt ( ) -> raiz quadrada
  echo "</br>A raiz quadrada de $v1 é " .sqrt($v1);
//    round ( ) -> arredondamento
  echo "</br>O valor arredondado de $v2 é " .round($v2);
//    intval ( ) -> valor inteiro da variavel
  echo "</br>A parte inteira de $v2 é " .intval($v2);
//    number format ( ) -> Formatacao de um numero
  echo "</br>O valor de $v1 em moeda é R$" .number_format($v1, 2, ",", "."); // (variavel, quantidade de casas depois da virgula, caracter que vai separar o numero inteiro do decimal, caracter que vai separar o milhar)
?>
</div>
</body>
</html>