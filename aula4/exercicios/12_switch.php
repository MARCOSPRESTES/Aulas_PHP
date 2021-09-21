<?php

$dia = readline("Digite o número correspondente ao dia da semana: ");

switch ($dia) {
  case '1':
    printf("O dia da semana corresponde a Domingo!");
    break;
  case '2':
    printf("O dia da semana corresponde a Segunda-feira!");
    break;
  case '3':
    printf("O dia da semana corresponde a Terça-feira!");
    break;
  case '4':
    printf("O dia da semana corresponde a Quarta-feira!");
    break;
  case '5':
    printf("O dia da semana corresponde a Quinta-feira!");
    break;
  case '6':
    printf("O dia da semana corresponde a Sexta-feira!");
    break;
  case '7':
    printf("O dia da semana corresponde a Sábado!");
    break;
  
  default:
    printf("O dia da semana digitado não corresponde a nenhum dia da semana!");
    break;
}

?>
