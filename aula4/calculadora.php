<?php

 echo "Digite o número num1: "; 
 $num1 = (int)fgets(STDIN);//string texto
 echo "Digite o número num2: ";
 $num2 = (int)fgets(STDIN);

 $soma = $num1 + $num2;
 $subtracao = $num1 - $num2;
 $divisao = $num1 / $num2;
 $multiplicacao = $num1 * $num2;
echo " A soma é: $soma,\n A subtracao é: $subtracao,\n A divisao é: $divisao,\n A multiplicacao é: $multiplicacao";

?>