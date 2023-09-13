<?php
require_once 'scr/Conta.php';

$contaDjoni = new Conta('000.000.000-00', 'Djoni');
$contaDjoni->depositar(50.2);
$contaDjoni->sacar(20);

echo PHP_EOL;

$contaJoao = new Conta('111.111.111-11', 'João');
$contaJoao->depositar(20);
$contaJoao->transferir(10, $contaDjoni);

$contas = [$contaDjoni, $contaJoao];
foreach ($contas as $conta) {
  echo "O saldo da conta {$conta->getTitular()} é {$conta->getSaldo()} reais" . PHP_EOL;
}
