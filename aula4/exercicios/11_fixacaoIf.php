<?php
/* Crie um algoritmo que leia dois valores (x e Y) representando um intervalo.
Em seguida, leia um novo valor (z) e verifique se z pertence ao intervalo [x,y].*/

$x = readline("Digite o menor Valor do intervalo: ");
"-\n";
$y = readline("Digite o maior Valor do intervalo: \n");
"-\n";
$z = readline("Digite o Valor a ser pesquisado no intervalo: \n");
"-\n";
if(( $z >= $x) && ($z <= $y)){
  printf("O número $z PERTENCE ao intervalo de $x a $y");
}else{
  printf("O número $z NÃO PERTENCE ao intervalo de  $x a $y");
} 
?>