
<!--**************************Ex. 1***************************-->
<?php

if (isset($_POST["nome1"]))
    $nome1 = $_POST["nome1"];
else
    $nome1 = "";

if (isset($_POST["nome2"]))
    $nome2 = $_POST["nome2"];
else
    $nome2 = "";   

if(isset($_POST["nome1"]) && isset($_POST["nome2"])){
      $nomeComp = "Nome completo: $nome1 $nome2";   
      //echo $nomeComp; 
}

//echo $nomeComp;
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nome Completo</title>
</head>
<body>
<br>
<br>
<br>

  <div>
    <fieldset>
      <legend>IDENTIFICAÇÃO</legend>
        <form action="nome.php" method="POST">
          <label for="">Nome</label>
            <input type="text" name="nome1" id="nome1" placeholder="Digite o Nome:">
          <br>
          <br>
          <label for="">Sobrenome</label>
            <input type="text" name="nome2" id="nome2" placeholder="Digite o Sobrenome:">
          <br>
          <br>
            <input type="Submit" value="Nome Completo">
            <input type="reset" value="Limpar">
          <br>
          <br>
            <input type="text" size="60" value="<?php if(isset($nomeComp)) echo $nomeComp;?>">
            <!--<label><?php echo $nomeComp ?></label>-->
        </form>
    </fieldset>
  </div>
</body> 
</html>



  <!--<Form action="nome.php" method="POST">
  <label for="nome">Nome</label>
  <input type="text" id="nome" name="nome">

  <label for="sobrenome">Sobrenome</label>
  <input type="text" id="sobrenome" name="sobrenome">
  <input type="submit" value="Enviar" id="enviar">

  <label for="completo">Nome Completo</label>
  <input type="text" id="completo" name="completo" disabled value="<php echo isset($nomeCompleto$?>"> 

</Form>
</html>
<php?
  if(isset($_POST["nome"])) //exemplo if(isset($_POST)){ $nome=$_POST["nome"];$Sobrenome=$_POST["sobrenome"] etc...}//
  $nome = $_POST["nome"];
  if(isset($_POST["sobrenome"]))
  $sobrenome = $_POST["sobrenome"];
  $nomeCompleto = ""$nome"." "."$sobbrenome"";-->
