<?php
/* 2) Crie um programa que solicite o nome, o endereço e a idade do usuário
 e depois mostra os dados digitados em uma única linha
Exemplo:<nome> mora no endereço :<endereco> e tem <idade>anos*/

echo "Digite seu nome: ";
$nome = rtrim(fgets(STDIN));
echo "Digite seu endereço: ";
$endereco = rtrim(fgets(STDIN));
echo "Digite sua idade ";
$idade = rtrim(fgets(STDIN));

echo $nome." mora no endereço: ".$endereco. "e tem ".$idade." anos";