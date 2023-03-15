<?php
//(1259) Even and Odd

$n = readline();
$imp = [];
$par = [];
for($i=0 ; $i<$n; $i++){
  $num = readline();
  if($num%2==0){
    $par[] = $num;
  } else{
    $imp[] = $num;
  }
}

sort($imp);
sort($par);
//O sort ordena a array em ordem crescente. Também existe o ksort, que faz o inverso

for($i=0 ; $i<count($par) ; $i++){
  //O count serve para contar a quantidade de valores em um array
  echo "{$par[$i]}\n";
}
for($i=count($imp)-1 ; $i>=0 ; $i--){
  echo "{$imp[$i]}\n";
}


/*
<?php
//(1259) Even and Odd
$n = readline();
$imp = [];
$par = [];
$tamPar = 0;
$tamImp = 0;
$s = 1;

while($n!=0){
  $num = readline();
  if($num%2==0){
    $par[] = $num;
    $tamPar+=1;
  } else{
    $imp[] = $num;
    $tamImp+=1;
  }
  $n--;
}

//$tamPar = count($par);
//$tamImp = count($imp);

while($s!=0){
  //sort par
  $teste = 0;
  for($i=0 ; $i<$tamPar-1 ; $i++){
    if($par[$i]>=$par[$i+1]){
      $ant = $par[$i];
      $par[$i] = $par[$i+1];
      $par[$i+1] = $ant;
      $teste = 1;
    }
  }
  //Sort par

  //krSort impar
  for($i=0 ; $i<$tamImp-1 ; $i++){
    if($imp[$i]<=$imp[$i+1]){
      $ant = $imp[$i];
      $imp[$i] = $imp[$i+1];
      $imp[$i+1] = $ant;
      $teste = 1;
    }
  }
  //krSort impar

  if($teste == 0){
    $s = 0;
  }
}

foreach ($par as $valor) {
    echo "{$valor}\n";
}
foreach ($imp as $valor) {
    echo "{$valor}\n";
}

?>
*/
?>


