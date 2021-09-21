<!--**************************Ex. 2***************************-->
<?php
if(empty($_POST["num1"]) || empty($_POST["num2"])){
  die("Preencha todos os Campos Corretamente!");
}

if (isset($_POST["num1"]))
$n1 = $_POST["num1"];
else $n1 =  "0";
if (isset($_POST["num2"]))
$n2 = $_POST["num2"];
else $n2 = "0";

$op = $_POST["op"];


switch ($op) {
  case "1":
    $tot = $n1 + $n2;
    $result = $n1." + ".$n2." = ".$tot;
    break;
  case "2":
    $tot = $n1 - $n2;
    $result = $n1." - ".$n2." = ".$tot;
    break;
  case "3":
    $tot = $n1 * $n2;
    $result = $n1." * ".$n2." = ".$tot;
    break;
  case "4":
    $tot = $n1 / $n2;
    $result = $n1." / ".$n2." = ".$tot;
    break;
  
  default:
    echo "Digite número válido!";
    break;
}



?>

<!DOCTYPE html>
  <html lang="pt-BR">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CALCULADORA</title>
    </head>
    <body>

<br>
<br>
      <div>
        <fieldset>
          <legend>CALCULADORA</legend>
            <form action="calculadora.php" method="POST">
            <label>1º Número</label>
            <input type="text" name="num1" id="num1" placeholder="Digite o Primeiro Número:">
          <br>
          <br>
            <label>2º Número</label>
            <input type="text" name="num2" id="num2" placeholder="Digite o Segundo Número:">
          <br>
          <br>
          <fieldset>
            <legend>Tipo de Operação</legend>
            <label for="op">Selecione a Operação: </label>
              <select name="op" id="op">
                <optgroup label="Operação"></optgroup>
                <option value="1">Adição</option> 
                <option value="2">Subtração</option> 
                <option value="3">Multiplicação</option> 
                <option value="4">Divisão</option> 
              </select>
          </fieldset>
            <br>
            <input type="Submit" value="Calcular">
            <input type="reset" value="Limpar"> 
            <br>
            <br>
            <label>Resultado</label>
            <label><?php echo $result?></label>

            <!--<input type="number" value="<?php echo $result?>">-->
          </fieldset>
        </form>
      </fieldset>
    </div>
  </body>
</html>