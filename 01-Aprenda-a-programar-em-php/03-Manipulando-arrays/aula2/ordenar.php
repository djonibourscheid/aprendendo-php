<?php

$notas = [10, 8, 9, 7];

// Sort recebe uma REFERENCIA e por isso muda o array passado
// Caso queira ter um novo array ordenado, precisa copiar para outra variável
$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Notas desordenadas" . PHP_EOL;
var_dump($notas);

echo PHP_EOL;

echo "Notas ordenadas" . PHP_EOL;
var_dump($notasOrdenadas);