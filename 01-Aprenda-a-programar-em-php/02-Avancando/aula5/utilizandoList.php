<?php

$contas = [
  '111.111' => [
    'titular' => 'josé',
    'saldo' => 200,
  ],
  '222.222' => [
    'titular' => 'arnaldo',
    'saldo' => 00,
  ],
];


foreach ($contas as $cpf => $conta) {
  // Usando list no php 7+
  ['titular' => $titular, 'saldo' => $saldo] = $conta;

  echo "Títular: $titular, Saldo: $saldo" . PHP_EOL;
}