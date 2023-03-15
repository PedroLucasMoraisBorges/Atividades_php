<?php
//(1101)Sequence of Numbers and Sum

while(true){
  $valor = readline();
  $valores = explode(" ", $valor);
  $soma = 0;

  $n1 = $valores[0];
  $n2 = $valores[1];

  if($n1<=0 || $n2<=0){
    break;
  } else{
    if($n1>$n2){
      for($n = $n2 ; $n<=$n1 ; $n++){
        $soma += $n;
        echo "{$n} ";
      }
    } else{
      for($n = $n1 ; $n<=$n2 ; $n++){
        $soma += $n;
        echo "{$n} ";
      }
    }
  }
  echo "Sum={$soma}\n";
}
?>