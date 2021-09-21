<?php

$frutas = array("pêra", "uva", "goiaba");
//arrays
//$frutas = ["pêra", "uva", "goiaba"];
//$frutas = ["fruta1"=>"pêra","fruta2"=>"uva", "fruta3"=>"goiaba"];

//forech (nome vetor as variavel)
foreach($frutas as $fruta){
  echo $fruta."<br>";
}

$agenda = ["nome"=>"João", "telefone"=>"2345678"];
  
foreach($agenda as $indice=>$contato){
  echo "$indice = $contato<br>";
}
