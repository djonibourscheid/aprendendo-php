<?php
require_once 'scr/Conta.php';

$contaDjoni = new Conta(new Titular('000.000.000-00', 'Djoni'));
$contaDjoni->depositar(50.2);
$contaDjoni->sacar(20);

echo PHP_EOL;

$contaJoao = new Conta(new Titular('111.111.111-11', 'Claudio'));
$contaJoao->depositar(20);
$contaJoao->transferir(10, $contaDjoni);

$contas = [$contaDjoni, $contaJoao];
foreach ($contas as $conta) {
  echo "O saldo da conta {$conta->getNome()} é {$conta->getSaldo()} reais" . PHP_EOL;
}
