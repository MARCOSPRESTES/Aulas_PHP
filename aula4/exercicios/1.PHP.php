<?php
/* Em um campeonato de futebol existem 5 times e cada time possui 11 jogadores. 
Faça um programa que receba a idade, o peso e a altura de cada um dos jogadores. 
Calcule e mostre:
a)A quantidade de jogadores com idade inferior a 18 anos;
b)A média das idades dos jogadores de cada time;
c)A média das alturas de todos os jogadores do campeonato;
d)A percentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato*/

echo "========================================================================";
echo "                         Cadaastro de Jogadores                         ";
echo "========================================================================";

$time = 0; 
$jogador = 0;
$idade = 0; 
$peso = 0; 
$altura = 0;
$tot_idade = 0;
$tot_altura = 0;

for($time = 1; $time <= 5; $time++){
  for($jogador = 1; $jogador <= 11; $jogador++){
      echo "Digite a Idade: ";
        $idade = (int)fgets(STDIN);
        if($idade < 18)
          $menorId++;
        $tot_idade = $idade;
      echo "Digite a Altura em cm: ";
        $altura = (int)fgets(STDIN);  
        $tot_altura = $altura;
  }
  echo "A quantidade de jogadorres menores de 18 anos é = $menorId";
  echo "Média das idades do time nº ".$time." = ".($tot_idade/11);
  echo "A  média das Alturas de Jogadores do campeonato é: ".($tot_altura/55);

}
printf();