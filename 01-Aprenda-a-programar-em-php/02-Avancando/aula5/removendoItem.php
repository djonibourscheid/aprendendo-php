<?php

// include 'funcoes.php';
require_once __DIR__ . '/../aula3e4/funcoes.php';

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

// Setando um item
$contasCorrentes['222.222.222-22'] = ['titular' => 'Claudio', 'saldo' => 0];


// Depositar
$contasCorrentes['222.222.222-22'] = depositar($contasCorrentes['222.222.222-22'], 100);

echo PHP_EOL;

// Sacar
$contasCorrentes['222.222.222-22'] = sacar($contasCorrentes['222.222.222-22'], 50);


// Removendo item
unset($contasCorrentes['222.222.222-22']);


// extrato
echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem("$conta[titular] tem R$$conta[saldo].");
}