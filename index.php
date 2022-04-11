<?php
echo "<h1>Hello World!</h1>";
 
$idade = 18;
 $idade = 17; //o conteúdo da váriavel pode mudar a qualquer momento que você digitar
 echo "<br>$idade";
 
 $salario = 2000.30;
 
 $idadedaqui10anos = 17 + 10;
 echo "<br> $idadedaqui10anos";
 
 $subtracao = 20 - 3;
 echo "<br> $subtracao";

 $potencia = 2 ** 3;
 echo "<br> $potencia";

 $divisão = 4 / 2;
 echo "<br> $divisão";

 $resto = 4 % 2;
 echo "<br> $resto";

 $multiplicacao = 2 * 2;
 echo "<br> $multiplicacao <br>";
 
 echo gettype($salario) ."<br>";

 $texto = "Olá mundo!";
 
 $verdadeiro = true;
 $falso = false;

 echo gettype($verdadeiro);
?>