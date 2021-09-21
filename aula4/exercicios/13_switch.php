<?php

$quarto = readline("\n
                    (1).Suite;\n
                    (2).Suite Master;\n
                    (3).Suite Mega;\n
                    Digite o número da opção de quarto desejada: ");
$modalidade = readline("Digite (1). para pernoite, ou (2). para diária: ");

switch ($quarto) {
  case '1':
    if($modalidade = 1){
      $horasAdic = readline("Digite a quantidade de horas adicionais: ");
        if($horasAdic >= 1){
            $preco = 70 * 18 * $horasAdic;
            echo ("O valor da estadia será de: R$" . number_format($preco,2));
        }else{$preco = 70;
             echo ("O valor da estadia será de: R$" . $preco);}
    }else{
      if($modalidade = 2){
        $dias = readline("Digita a quantidade de dias: ");
          if($dias>=1){
             $preco = 170 * $dias;
             echo ("O valor da estadia será de: R$" . number_format($preco,2));
          }
      }
     break;
    }
  case '2':
    if($modalidade = 1){
      $horasAdic = readline("Digite a quantidade de horas adicionais: ");
        if($horasAdic >= 1){
            $preco = 90.00 * 22.00 * $horasAdic;
      }else{$preco = 90.00;}
    }else{
      if($modalidade = 2){
        $dias = readline("Digita a quantidade de dias: ");
          if($dias>=1){
             $preco = 190.00 * $dias;
          }
      }
    } 
      printf("O valor da estadia será de: R$" + $preco);
    break;
  
  case '3':
    if($modalidade = 1){
      $horasAdic = readline("Digite a quantidade de horas adicionais: ");
        if($horasAdic >= 1){
            $preco = 120.00 * 25.00 * $horasAdic;
      }else{$preco = 120.00;}
    }else{
      if($modalidade = 2){
        $dias = readline("Digita a quantidade de dias: ");
          if($dias>=1){
             $preco = 190.00 * $dias;
          }
      }
    } 
      printf("O valor da estadia será de: R$" + $preco);
    break;
  
  
  default:
    printf(" Digite um valor válido!");
    break;
}
?>