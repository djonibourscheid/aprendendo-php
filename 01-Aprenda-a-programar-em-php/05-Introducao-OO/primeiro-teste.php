<?php
require_once 'scr/Conta.php';

$contaDjoni = new Conta();
$contaDjoni->setTitular('Djoni');
$contaDjoni->depositar(50.2);
$contaDjoni->sacar(20);

echo PHP_EOL;

$contaJoao = new Conta();
$contaJoao->setTitular("João");
$contaJoao->depositar(20);
$contaJoao->transferir(10, $contaDjoni);

$contas = [$contaDjoni, $contaJoao];
foreach ($contas as $conta) {
  echo "O saldo da conta {$conta->getTitular()} é {$conta->getSaldo()} reais" . PHP_EOL;
}