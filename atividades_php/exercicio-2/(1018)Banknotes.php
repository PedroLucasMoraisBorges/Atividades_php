<?php
//(1018)Banknotes

$n1 = readline();
echo "{$n1}\n";

$cem = (int) ($n1/100);
$cinq = (int) (($n1%100)/50); 
$vint = (int) ((($n1%100)%50)/20);
$dez = (int)(((($n1%100)%50)%20)/10);
$cinc = (int)((((($n1%100)%50)%20)%10)/5);
$dois = (int)(((((($n1%100)%50)%20)%10)%5)/2);
$um = (int)((((((($n1%100)%50)%20)%10)%5)%2)/1);

//O (int) serve para transformar o valor em inteiro
echo "{$cem} nota(s) de R$ 100,00\n";
echo "{$cinq} nota(s) de R$ 50,00\n";
echo "{$vint} nota(s) de R$ 20,00\n";
echo "{$dez} nota(s) de R$ 10,00\n";
echo "{$cinc} nota(s) de R$ 5,00\n";
echo "{$dois} nota(s) de R$ 2,00\n";
echo "{$um} nota(s) de R$ 1,00\n";

?>