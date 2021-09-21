<?php
/*10)Faça um programa que calcule o valor a ser pago por uma dívida em atraso 
O usuário deve informar o valor original da dívida (ex R50,00 a quantidade de 
dias em atraso (ex 35 dias) e o percentual da multa por dia de atraso ex1%*/

$valorOrig = readline("Digite o Valor original da dívida:  ");
$diasAtraso = readline("Digite a quantidade de dias de atraso:  ");
$percentual = readline("Digite o percentual da multa por dias de dias de atraso(%):  ");

$valorAtual = $valorOrig + ($valorOrig * ($percentual/100) * $diasAtraso);

echo "O valor corrigido da dívida com multa de".$percentual."% ao dia é de R$".$valorAtual= (number_format($valorAtual,2));
