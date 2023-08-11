<?php

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

function exibeMensagem(string $mensagem): void
{
  echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
  if ($conta['saldo'] < $valor) {
    echo "A conta de $conta[titular] não tem saldo disponível para sacar R$$valor." . PHP_EOL;
    return $conta;
  }

  $conta['saldo'] -= $valor;
  echo "O valor de R$$valor foi sacado da conta de $conta[titular]. O saldo agora é de R$$conta[saldo]." . PHP_EOL;
  return $conta;
}

function depositar(array $conta, float $valor): array
{
  if ($valor <= 0) {
    exibeMensagem('O valor de depósito precisa ser maior que 0.');
  } else {
    exibeMensagem("O valor de R$ $valor foi adicionado na conta de $conta[titular].");
    $conta['saldo'] += $valor;
  }
  return $conta;
}


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