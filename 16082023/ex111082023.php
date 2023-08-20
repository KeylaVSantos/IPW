<!DOCTYPE html>
<html>
    <head>
        <title> tela usuario</title>
        
        <link rel="stylesheet" type="text/css" href="css/estilo.html"/>
    </head>

        <body>

            <?php

            echo "<br> EXERCÍCIO 1 <hr><br>";
            echo "Vamos calcular a área de uma circunferência <br><br>";

            echo "Faça um algoritmo para calcular a área de uma circunferência. <br><br>";

            echo "Digite o valor de raio: <br><br>";
            echo "
                    <form action=ex111082023.php method=GET>
                     
                        <input type=text name=raio>
                        <input type=submit>
                    </form>";

            $raio = $_GET['raio'];
            $pi = 3.14159;
            $area = $pi * ($raio * $raio);
            echo "A área desta desta circunferência é: ";
            echo "$area <br> <br>";
            ?>

            <?PHP

            echo "<hr> EXERCÍCIO 2 ----> Faça um algoritmo para calcular a área de um triângulo
            <br><hr>";

            echo "Vamos calcular a área de um triâgulo? <br><br>";
            echo "Digite o valor da base e depois digite a altura: ";

            echo "
                    <form action=ex111082023.php method=GET>
                        <input type=text name=base> <br><br>
                        <input type=text name=altura> <br> <br>
                        <input type=submit>
                    </form>
                ";


            $base = $_GET['base'];
            $altura = $_GET['altura'];
            $area2 = ($base * $altura)/2;
            echo "A área do triângulo é: ";
            echo "$area2 <br> <br>";

            ?>

            <?PHP

            echo "<hr> EXERCÍCIO 3 ----> Faça um algoritmo que leia nome e sobrenome e 
            una os dois e apareça o resultado<br><hr>";

            echo "Qual o seu nome? <br><br>";
            echo "Digite seu 1º nome e logo após escreva o sobrenome ";

            echo "
                <form action=ex111082023.php method=GET>
                    <input type=text name=nome> <br><br>
                    <input type=text name=sobrenome> <br> <br>
                    <input type=submit>
                </form>";

            $nome = $_GET['nome'];
            $sobnome = $_GET['sobrenome'];
            echo "seu nome é: ";
            echo "$nome $sobnome <br> <br>";

            ?>

            <?PHP

                echo "<hr> EXERCÍCIO 4 ----> Faça um algoritmo que leia 2 número inteiros e
                apresente o valor calculado <hr>";

                echo "<br> Digite um número e em seguida digite outro número para fazer a soma: ";

                echo "
                    <form action=ex111082023.php method=GET>
                        <input type=text name=num1><br><br>
                        <input type=text name=num2><br><br>
                        <input type=submit>
                    </form>";

                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $soma = $num1 + $num2;
                echo "o resultado da soma é: $soma";
            ?>

        </body>
</html>