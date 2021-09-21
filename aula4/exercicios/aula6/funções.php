<?php

$num1 = 1;
$num2 = 2;
$soma = $num1 + $num2;

//Função sem parametro e sem retorno
//assinatura da função
function soma(){
  $num1 = 1;
$num2 = 2;
$soma = $num1 + $num2;
echo $soma;
}

//Chamada para a função
soma();

//->->->->->->->->->->->->
//Função com Parametro sem retorno
function soma1($num1,$num2){
  $soma = $num1 + $num2;
  echo $soma."<br>";
}
soma1(10,1.5);
soma1(178,200);
soma1(1,2);


?>