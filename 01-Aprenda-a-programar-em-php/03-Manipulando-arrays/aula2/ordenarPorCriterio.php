<?php

$notas = [
  ['aluno' => 'Ana', 'nota' => 9],
  ['aluno' => 'Vinicius', 'nota' => 6],
  ['aluno' => 'Maria', 'nota' => 10]
];

function ordenaNotas(array $nota1, array $nota2): int
{
  // Aqui ficou em ordem decrescente, quanto maior o número, antes ele aparece.
  if ($nota1['nota'] > $nota2['nota']) {
    return -1;
  } else if ($nota2['nota'] > $nota1['nota']) {
    return 1;
  }

  return 0;
  // -1: se o elemento A tiver que vir ANTES do B
  //  0: se deve ficar no mesmo lugar
  //  1: se o elemento A deve ir DEPOIS do B
}
usort($notas, 'ordenaNotas');
var_dump($notas);