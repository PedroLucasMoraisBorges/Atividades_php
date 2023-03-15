<?php
//(1133) Rest of a Division

$n1 = readline();
$n2 = readline();

if($n1>$n2){
  for($n = $n2+1 ; $n<$n1 ; $n++){
    if($n%5==2 || $n%5==3){
      echo "{$n}\n";
    }
  }
  } else if($n1<$n2){
  for($n = $n1+1 ; $n<$n2 ; $n++){
    if($n%5==2 || $n%5==3){
      echo "{$n}\n";
    }
  }
}

?>