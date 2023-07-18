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
    $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[NAO INFORMADO]"; #isset significa CONFIGURADO 
    $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[SEM SEXO]" ;
    $idade = isset ($_GET["ano"]) ? date("Y") - $ano : "[SEM IDADE]"; #date("y") com o minusculo mostra o ano atual reduzido, isto e, com os dois ultimos numeros, date("Y") mostra o ano inteiro.
     echo "$nome é $sexo e tem $idade anos."; 
  ?>
   <a href="exercicio2.html">Voltar</a>
</div>
   
</body>
</html>