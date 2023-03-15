<?php
//(1168) LED

$n = readline();
for($i=0 ; $i<$n ; $i++){
  $num = readline();
  $soma = 0;
  for($e=0 ; $e<strlen($num) ; $e++){
    //strlen($var) serve para contar a quantidade de caracteres de uma string
    $unidade = $num[$e];

    switch($unidade){
      case 0:
        $soma+=6;
        break;
      
      case 1:
        $soma+=2;
        break;
      
      case 2:
        $soma+=5;
        break;
      
      case 3:
        $soma+=5;
        break;
      
      case 4:
        $soma+=4;
        break;
      
      case 5:
        $soma+=5;
        break;
      
      case 6:
        $soma+=6;
        break;
      
      case 7:
        $soma+=3;
        break;
      
      case 8:
        $soma+=7;
        break;
      
      case 9:
        $soma+=6;
        break;
    }
  }
  echo "{$soma} leds\n";
}
?>