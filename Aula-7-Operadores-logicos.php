<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores lógicos</title>
</head>
<body>
<div>
    <?php
/*
E é &&/and
OU é ||/or
ou...ou/xou é xor
nao/not é !
 */
           ## EXERCICIO . Mostrar se um eleitor é obrigado a votar ou não.
 $anodenascimento = $_GET["an"];
 $idade = 2023 - $anodenascimento;
 echo "Quem nasceu em $anodenascimento tem idade de $idade anos. ";

 $tipo = ($idade <= 18 && $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
 echo "</br>Seu voto é $tipo";


    ?>
</div>
</body>
</html>