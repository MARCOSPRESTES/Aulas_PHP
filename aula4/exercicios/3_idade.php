<?php
/* 3)Crie um programa que leia uma idade de uma pessoa e 
calcule quantos dias essa pessoa já viveu*/
$data_nasc = '1980-06-11';
$data_atual = '2021-08-18';

$diferenca = strtotime($data_atual) - strtotime($data_nasc);

$dias = floor($diferenca / (60 * 60 * 24));

echo "A diferença é de $dias entre as datas";