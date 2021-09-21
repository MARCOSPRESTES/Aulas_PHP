<?php
/*5)Crie um programa que lê o salário de um funcionário, e o percentual
de reajuste O programa deve calcular o salário reajustado e
mostrar o resultado*/

$sal = readline("Digite o Salário para calcular: ");
$percentual = readline("Digite o Percentual de Reajuste(%): ");
$reajuste = $sal * ($percentual / 100);
$novo_salario = $sal + $reajuste;

echo "Seu novo salário com reajuste de ".$percentual."% será de R$".$novo_salario; 