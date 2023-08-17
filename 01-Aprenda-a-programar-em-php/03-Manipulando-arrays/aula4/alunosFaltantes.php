<?php

$notasBimestre1 = [
  'Ana' => 9,
  'Vinicius' => 6,
  'Maria' => 10,
  'Claudio' => 5,
  'José' => 7
];

$notasBimestre2 = [
  'Ana' => 7,
  'Vinicius' => 6,
  'Claudio' => 5,
];


$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump($nomesAlunos, $notasAlunos);

// Caso queira fazer um novo array com outros arras podemos usar o combine
var_dump(array_combine($notasAlunos, $nomesAlunos));

// Caso queremos trocar de lugar a chave com o valor temos o flip
var_dump(array_flip($alunosFaltantes));