<?php
/*9)Sabendo se que um veículo faz 12 km/ lt Faça um programa que calcule a média
 de consumo de combustível de um veículo O usuário deve informar o KM inicial (ex 12500 km), 
 o KM final (ex 12700 km) e quantos litros foram gastos no percurso*/

$kmInicial = readline("Digite a kilometragem de início:  ");
$kmFinal = readline("Digite a kilometragem final:  ");
$litros = readline("Digite quantos litros de combustível foram gastos:  ");

$kmRodado = $kmFinal - $kmInicial;
$media = $kmRodado / $litros;

echo "A média de consumo foi de ".$media= (number_format($media,2))." KM/litro";
