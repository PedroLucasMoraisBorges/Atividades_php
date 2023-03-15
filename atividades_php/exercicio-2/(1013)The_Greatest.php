<?php
//(1013)The_Greatest

$valores = readline();
$valores = explode(' ',$valores);

$n1 = $valores[0];
$n2 = $valores[1];
$n3 = $valores[2];


$maior12 = ($n1+$n2+abs($n1-$n2))/2;
$maior13 = ($n1+$n3+abs($n1-$n3))/2;
$maior23 = ($n2+$n3+abs($n2-$n3))/2;
//abs serve para tirar o valor absoluto de algo.

if($maior12 == $n1 && $maior13 == $n1){
  echo "{$n1} eh o maior\n";
  
} else if($maior12 == $n2 && $maior23 == $n2){
  echo "{$n2} eh o maior\n";
  
} else if($maior23 == $n3 && $maior23 == $n3){
  echo "{$n3} eh o maior\n";
  
};

?>