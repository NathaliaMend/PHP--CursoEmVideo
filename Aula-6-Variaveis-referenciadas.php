<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis</title>
</head>
<body>
    <div>
        <?php
        # Variáveis referenciadas
        $a= 3;  
        $b = $a; // b recebe a . A variavel b vai receber o mesmo conteudo da variavel a. Ou seja 3
        $b += 5; // b recebe ele mesmo mais 5 . 3+5 . A variavel b mudará de 3 para 8.
        echo "$a";
        echo "<br/>$b";

        $a = 3;
        $b = &$a; // Ecomercial Faz uma variavel ter referencia a outra, elas terao uma conexao/compartilhamento uma com a outra.Assim b tera sempre o mesmo valor de a , e a tera sempre o mesmo valor de b.
        $b += 5; // o b será 3+5, ou seja, 8 . Automaticamente quando se altera o b o a também altera, recebe o mesmo valor de b.
        echo "<br/>$a";
        echo "<br/>$b";


        ## VARIÁVEIS DE VARIÁVEIS

    $site = "cursoemvideo";
    $$site = "cursoPHP";  //Cifrão antes de variáveis cria 'variaveis de variaveis' ou 'variaveis de variantes'. O cifrao cria uma variavel chamada cursoemvideo que contenha o valor atribuido cursoPHP. ($cursoemvideo = "cursoPHP")   
    echo "<br/>Mostrando a variavel site : $site"; #imprimiu cursoemvideo
    echo  "<br/>Mostrando a variavel com dois cifraos: $$site"; #imprimiu $cursoemvideo
    echo "<br/>Mostrando a variavel curso em video criada pelos dois cifraos: $cursoemvideo"; #imprimiu cursoPHP
         ?>
    </div>
</body>
</html>