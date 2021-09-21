<?php

if(isset($_POST["nome"]))
  $nome = $_POST["nome"];
else
  $nome = "";
  
if(isset($_POST["idade"])) 
$idade = $_POST["idade"];
else 
  $idade = "0";

$mensagem = "Bem-vindo $nome, você tem $idade anos";
//echo $mensagem;

//isset($_Post(["idade"])?$idade = $_POST["idade"] : $idade = 0 )
//if(empty($_POST["idade"]));//Variável vazia!




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
<fieldset>
  <legend>Dados</legend>
<form action="aula5formularios.php" method="POST">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome">
<br>
<br>
<label for="idade">Idade</label>
<input type="number" max="150" name="idade" id="idade">
<br>
<br>
<input type="submit" value="Enviar">
<input type="reset" value="Limpar">
<label for=""><?php if(isset($mensagem)) echo $mensagem?></label>
</form>
</fieldset>
</body>
</html>