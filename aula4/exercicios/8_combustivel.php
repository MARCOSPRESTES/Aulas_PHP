<?php
/*8)Faça um programa que solicite ao usuário o valor do litro de combustível
(ex 4,19 e qual valor ele deseja abastecer (ex 50,00)
Calcule quantos litros de combustível o usuário obterá com esses valores*/

$precoLitro = readline("Digite um valor do litro de combustível:  ");
$valorAbastecido = readline("Digite um valor que deseja abastecer:  ");

$quantAbastecida = $valorAbastecido / $precoLitro;

echo "Abastecendo com o valor de R$".$valorAbastecido= (number_format($valorAbastecido,2))."\n Será colocado ".$quantAbastecida= (number_format($quantAbastecida,2))."lts de combustível no carro.";
