<?php
// 1)Crie um programa que escreve o seu nome completo, 
//colocando uma palavra em cada linha.

echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Digite seu sobrenome: ";
$sobreNome = fgets(STDIN);

echo "Seu nome completo é:\n $nome\n $sobreNome";