<html>
    <head>
        <title> Aula 3 PHP </title>
    </head>
    <body>
        <?php
            $nome1 = "Bia";
            $nome2 = "Otávio";

            $n1 = 10;
            $n2 = 2;
            $soma = $n1+$n2;

            echo "Meu nome é " .$nome1 ." e minha dupla é " .$nome2;
            echo "<br> Meu nome é $nome1 e minha dupla é $nome2";

            echo "<br> <br> A soma de $n1 com $n2 é igual a: $soma";

            echo "<br> <br> O resultado da subtração de $n1 e $n2 é igual a: " .($n1-$n2);

            echo "<br> <br> O resultado da multiplicação de $n1 e $n2 é igual a: " .($n1*$n2);

            echo "<br> <br> O resultado da divisão de $n1 e $n2 é igual a: " .($n1/$n2);

            echo "<br> <br> O resto da divisão de $n1 e $n2 é igual a: " .($n1%$n2);

          ?>
    </body>
</html>
