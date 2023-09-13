<?php
require_once 'scr/Conta.php';

$contaDjoni = new Conta();
$contaDjoni->setTitular('Djoni');
$contaDjoni->setSaldo(50.2);

$contaJoao = new Conta();
$contaJoao->setTitular("João");
$contaJoao->setSaldo(10);


$contas = [$contaDjoni, $contaJoao];
foreach ($contas as $conta) {
  echo "O saldo da conta {$conta->getTitular()} é {$conta->getSaldo()} reais" . PHP_EOL;
}