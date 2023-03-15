<?php
//(1028) Collectable Cards

$n = readline();

while($n--){
  $numeros = readline();
  $numeros = explode(" ", $numeros);

  $n1 = $numeros[0];
  $n2 = $numeros[1];
  $max_div = 1;

  //Forma de fazer MDC
  while($max_div != 0){
    $max_div = $n1 % $n2;
    $n1 = $n2;
    $n2 = $max_div;
  }
  echo "{$n1}\n";
}





//Time Limit:

/*
$n = readline();

for($i=0 ; $i<$n ; $i++){
  $numeros = readline();
  $numeros = explode(" ", $numeros);

  $n1 = $numeros[0];
  $n2 = $numeros[1];
  $max_div = gmp_gcd($n1, $n2);
  //Calcula o MDC de dois números.

  echo $max_div;
}
*/

/*
$n = readline();

for($i=0 ; $i<$n ; $i++){
  $numeros = readline();
  $numeros = explode(" ", $numeros);
  
  if($numeros[0]==$numeros[1]){
    echo "{$numeros[0]}\n";
  } else{
    for($e=($maior = max($numeros[0] , $numeros[1])) ; $e>0 ; $e--){
      if($numeros[0]%$e==0 && $numeros[1]%$e==0){
        echo "{$e}\n";
        break;
      }
    }
  }
}
*/


/*
$n = readline();

while($n--){
  $numeros = readline();
  $numeros = explode(" ", $numeros);

  $n1 = $numeros[0];
  $n2 = $numeros[1];
  $maior = max($n1 , $n2);
  $max_div = 0;

  if($n1==$n2){
    $max_div = $n1;
  } else{
    while($maior--){
      if($n1%$maior==0 && $n2%$maior==0){
        $max_div = $maior;
        break;
      }
    }
  }
  echo "{$max_div}\n";
}
*/
?>