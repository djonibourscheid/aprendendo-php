<?php

$conta1 = ['titular' => 'João', 'saldo' => 123];
$conta2 = ['titular' => 'Marcos', 'saldo' => 500];
$conta3 = ['titular' => 'José', 'saldo' => 1000];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  $titular = $contasCorrentes[$i]['titular'];
  $saldo = $contasCorrentes[$i]['saldo'];

  echo "A conta de $titular tem $saldo reais." . PHP_EOL;
}