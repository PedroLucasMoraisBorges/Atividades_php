<?php
//(1103) Alarm Clock

$s = 1;
while($s!=0){
  $valores = readline();
  $valores = explode(" ", $valores);

  $hi = $valores[0];
  $mi = $valores[1];

  $hf = $valores[2];
  $mf = $valores[3];

  $hm1 = ($hi*60)+$mi;
  $hm2 = ($hf*60)+$mf;

  $minutos = 0;
  if($hm1 == 0 && $hm2==0){
    break;
  } else if($hm1>$hm2){
    $minutos = 1440 - $hm1 + $hm2;
  } else if($hm1<$hm2){
    $minutos = $hm2-$hm1;
  } else{
    $minutos = 1440;
  }

  echo "{$minutos}\n";
}
?>