<?php
//(1024) Encryption

$n = readline();
for($c=0 ; $c<$n ; $c++){
  $palavra = readline();
  $tam = strlen($palavra); //strlen($var) dá o tamanho da string.
  $completa = "";

  for($i=0 ; $i<$tam ; $i++){
    if(ctype_alpha($palavra[$i])){
      //ctype_alpha serve para sabermos se o caractere é alfabético.
      $palavra[$i] = chr(ord($palavra[$i])+3); 
      //O chr(n) serve para saber o caractere de acordo com o número na tabela ascii;
      //O ord("n") serve para saber o número do caractere na tabela ascii;
      $completa .= $palavra[$i];
      
    } else{$completa .= $palavra[$i];}
  }

  $completa = strrev($completa); //Inverte string;
  
  for($i=(int)($tam/2) ; $i<$tam ; $i++){
    $completa[$i] = chr(ord($completa[$i])-1);
  }

  echo "{$completa}\n";
}
?>