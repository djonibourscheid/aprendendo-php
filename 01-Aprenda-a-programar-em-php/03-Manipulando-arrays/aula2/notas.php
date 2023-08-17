<?php

$notas = [10, 2, 6, 9, 5];

sort($notas);
echo 'Notas de forma crescente:' . PHP_EOL;
var_dump($notas);

echo PHP_EOL;

rsort($notas);
echo 'Notas de forma decrescente:' . PHP_EOL;
var_dump($notas);


echo PHP_EOL . 'Notas associativas:' . PHP_EOL;

$notasComNomes = [
  'Ana' => 10,
  'José' => 2,
  'Maria' => 6,
  'Djoni' => 9,
  'Claudio' => 5
];

asort($notasComNomes);
echo 'Notas de forma crescente:' . PHP_EOL;
var_dump($notasComNomes);

echo PHP_EOL;

arsort($notasComNomes);
echo 'Notas de forma decrescente:' . PHP_EOL;
var_dump($notasComNomes);


echo PHP_EOL . 'Ordenar pelas chaves:' . PHP_EOL;

ksort($notasComNomes);
echo 'Chaves de forma crescente:' . PHP_EOL;
var_dump($notasComNomes);

echo PHP_EOL;

krsort($notasComNomes);
echo 'Chaves de forma decrescente:' . PHP_EOL;
var_dump($notasComNomes);