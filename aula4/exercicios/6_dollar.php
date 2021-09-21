<?php
/*6)Crie um programa que lê um número real em dólar, e converte o valor 
para reais Considere que a cotação é US=1 R=5,47.*/

$dolar = readline("Digite o valor em dólar(U$) para a conversão: ");
$real = 5.47;
$conversao = $dolar * $real;

echo "O valor de U$".$dolar = (number_format($dolar,2))." convertidos para Reais é de: R$".$conversao=(number_format($conversao,2)); 