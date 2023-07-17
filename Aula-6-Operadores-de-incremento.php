<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de exemplo</title>
</head>
<body>
    <div>
        <?php
              ## Operadores de Icremento :
# pré-incremento
//$a = $a + 1;  ++$a; // Incrementa antes de qualquer coisa.
# pós-incremento
//$a = $a + 1;  $a++; // Primeiro faz uso da variavel e depois incrementa.

# pré-decremento 
//$a = $a - 1;  --$a;
# pós-decremento
//$a = $a - 1;   $a--;

     # Exemplo/exercio:
# Mostrar qual foi o ano anterior ao ano atual :
# INCREMENTO:
$atual = $_GET["aa"];
echo "O ano atual é $atual e o ano anterior é " .--$atual;


?>
    </div>
</body>
</html>