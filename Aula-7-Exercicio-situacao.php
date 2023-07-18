<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>situacao do aluno</title>
</head>
<body>
<div>
    <?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$m = ($nota1 + $nota2) / 2;
echo "A media entre $nota1 e $nota2 é $m";
/* 
  #nao concatenado:
$sit = (($m < 6) ? "REPROVADDO" : "APROVADO") ; 
   echo "a situação do aluno é $sit";
*/
   #concatenado:
echo "a situação do aluno é " .(($m < 6) ? "REPROVADDO" : "APROVADO") ;

    ?>
</div>
</body>
</html>