<?php

$contasCorrentes = [
  '000.000.000-00' => [
    'titular' => 'José',
    'saldo' => 0,
  ],
  '111.111.111-11' => [
    'titular' => 'Djoni',
    'saldo' => 100,
  ]
];

function sacar($conta, $valor)
{
  if ($conta[saldo] < $valor) {
    echo "A conta de $conta[titular] não tem saldo disponível para sacar R$$valor.";
    return false;
  }

  $conta[saldo] -= $valor;
  echo "O valor de R$$valor foi sacado da conta de $conta[titular]. O saldo agora é de R$$conta[saldo]";
  return true;
}

sacar($contasCorrentes['111.111.111-11'], 50);