<?php
//(1253)Caesar_Cipher

$n = readline();

for($i=0 ; $i<$n ; $i++){
  $letras = readline();
  $salto = readline();
  $letras = strtoupper($letras);
  //Transforma qualquer caractere alfabético em maiúsculo. Tem também o strtolower($var);
  $completo = "";

  for($e=0 ; $e<strlen($letras) ; $e++){
    if((ord($letras[$e])-$salto)<65){
      $format = 91 - ($salto - (ord($letras[$e])-65)); 
      $new_letra = chr($format);

      $completo .= $new_letra;
    } else{
      $new_letra = chr(ord($letras[$e])-$salto);
      $completo .= $new_letra;
    }

  }
  echo "{$completo}\n";
}
?>