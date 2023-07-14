<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
  <?php 
  $n = 40;
  $n2 = 20;
  $s = $n + $n2;
  echo "A soma de $n e $n2 é igual a $s."; 

  # adicao: $r = $a + $b;
  # subtracao: $r = $a - $b;
  # divisao: $r = $a / $b;
  # multiplicacao: $r = $a * $b;
  # modulo: $r = $a % $b;   ( modulo é o restante da divisao )

  echo "<br/>A soma de $n e $n2 vale ". ($n + $n2);
  echo "<br/>A subtracao vale " . ($n - $n2);
  echo "<br/>A divisao vale " . ($n / $n2);
  echo "<br/>A multiplicacao vale " . ($n * $n2);
  echo "<br/>O modulo vale " . ($n % $n2);


  # ORDEM DE PRECEDÊNCIA:
  # parenteses ( )
  # multiplicao * , divisao / , modulo %
  # adicao + , subtracao - 

  # calculo da media:
  $media = ($n + $n2) / 2;
  echo "<br/>A media é $media" ;

  # Valores personalizados :
  # Acrescentar na URL nome e valor de variaveis que no caso sao chamados de parametros. Exemplo:
  # http://127.0.0.1/Operadores-Aritmeticos.php?a=50&b=100 .  "(?a=50&b=100)"

  $n3 = $_GET ["a"] ;
  $n4 = $_GET ["b"] ;

  echo "<h2>Valores recebidos: $n3 e $n4 </h2>";

  echo "<br/>A soma de $n3 e $n4 vale ". ($n3 + $n4);
  echo "<br/>A subtracao vale " . ($n3 - $n4);
  echo "<br/>A divisao vale " . ($n3 / $n4);
  echo "<br/>A multiplicacao vale " . ($n3 * $n4);
  echo "<br/>O modulo vale " . ($n3 % $n4);
?>  
  </div>
</body>
</html>