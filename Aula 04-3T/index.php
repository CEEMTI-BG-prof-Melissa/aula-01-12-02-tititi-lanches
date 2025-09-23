<html>
    <head>
        <title> Aula 4 PHP </title>
    </head>
    <body>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "A soma de $n1 com $n2 é igual a: " .($n1+$n2);
            
            echo "<br> <br> O resultado da subtração de $n1 e $n2 é igual a: " .($n1-$n2);

            echo "<br> <br> O resultado da multiplicação de $n1 e $n2 é igual a: " .($n1*$n2);

            echo "<br> <br> O resultado da divisão de $n1 e $n2 é igual a: " .($n1/$n2);

            echo "<br> <br> O resto da divisão de $n1 e $n2 é igual a: " .($n1%$n2);

        ?>
    </body>
</html>
