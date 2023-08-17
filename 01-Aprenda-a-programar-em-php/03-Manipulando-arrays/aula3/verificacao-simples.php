<?php
// chaves = 0,1,2,3,4
$notas = [1, 2, 5, 8, 9.6];

// Verifica se é um array
if (is_array($notas)) {
  echo 'É um array!' . PHP_EOL;
}

// retorna true caso o array for em numérico (todas as suas chaves são números),
// caso começe com o zero e a partir do zero são todas crescentes. Ou seja, ele não pula uma chave. (chaves = 0,1,2,)
var_dump(array_is_list($notas));

$notasComNomes = [
  'ana' => 3,
  'julia' => 2
];
var_dump(array_is_list($notasComNomes)); // false pq não tem chaves numericas

$pulandoChaves = [
  1 => 'um',
  2 => 'dois',
  4 => 'quatro'
];
var_dump(array_is_list($pulandoChaves)); // false pq está pulando chaves