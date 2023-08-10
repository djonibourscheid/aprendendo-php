<?php

$conta1 = ['titular' => 'João', 'saldo' => 123];
$conta2 = ['titular' => 'Marcos', 'saldo' => 500];
$conta3 = ['titular' => 'José', 'saldo' => 1000];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $indice => $conta) {
  $titular = $conta['titular'];
  $saldo = $conta['saldo'];

  echo "A conta de índice $indice, do titular $titular tem $saldo reais." . PHP_EOL;
}