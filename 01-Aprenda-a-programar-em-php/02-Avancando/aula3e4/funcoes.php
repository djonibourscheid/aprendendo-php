<?php

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