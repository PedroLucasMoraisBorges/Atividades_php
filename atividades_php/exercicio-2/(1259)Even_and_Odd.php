<?php
$n = intval(fgets(STDIN));
$pares = array();
$impares = array();
for ($i = 0; $i < $n; $i++) {
    $valor = intval(fgets(STDIN));
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}
sort($pares);
rsort($impares);
foreach ($pares as $valor) {
    echo $valor . "\n";
}
foreach ($impares as $valor) {
    echo $valor . "\n";
}
?>
