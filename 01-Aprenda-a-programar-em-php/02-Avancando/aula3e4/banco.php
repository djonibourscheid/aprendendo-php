<?php

// include 'funcoes.php';
require 'funcoes.php';

$contasCorrentes = [
  '000.000.000-00' => [
    'titular' => 'José',
    'saldo' => 10,
  ],
  '111.111.111-11' => [
    'titular' => 'Djoni',
    'saldo' => 100,
  ]
];


// Sacar
$contasCorrentes['111.111.111-11'] = sacar($contasCorrentes['111.111.111-11'], 50);
$contasCorrentes['000.000.000-00'] = sacar($contasCorrentes['000.000.000-00'], 50);

echo PHP_EOL;

// Depositar
$contasCorrentes['111.111.111-11'] = depositar($contasCorrentes['111.111.111-11'], 5);
$contasCorrentes['000.000.000-00'] = depositar($contasCorrentes['000.000.000-00'], 50);


// extrato
echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem("$conta[titular] tem R$$conta[saldo].");
}