<?php
//(1071)Sum of Consecutive Odd Numbers

$n1 = (int)readline();
$n2 = (int)readline();
$soma = 0;


if($n1>$n2){
  for($i=$n2+1 ; $i<$n1 ; $i++){
    if($i%2 != 0){
      $soma += $i;
    }
  }
  echo "{$soma}\n";
} else{
  for($i=$n1+1 ; $i<$n2 ; $i++){
    if($i%2 != 0){
      $soma += $i;
    }
  }
  echo "{$soma}\n";
}
?>