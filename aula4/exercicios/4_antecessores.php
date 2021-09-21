<?php
/*Crie um programa que leia um número na tela, mostra seus 2 sucessores e 2 antecessores
Exemplo numero 5 antecessores 4 3 sucessores 6 7*/

echo "Digite um número: ";
$num = fgets(STDIN);
$suc1 = $num + 1;
$suc2 = $num + 2;

$ant1 = $num - 1;
$ant2 = $num - 2;

echo "Os números antecessores são ".$ant1." e ".$ant2."\n";
echo "Os números sucessores são ".$suc1." e ".$suc2; 