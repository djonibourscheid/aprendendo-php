<?php
require_once 'src/Conta.php';

$contaDjoni = new Conta('000.000.000-00', 'Djoni                ');
$contaJoao = new Conta('111.111.111-11', 'João');

echo 'Total de contas: ' . Conta::getTotalDeContas() . PHP_EOL;

$contas = [$contaDjoni, $contaJoao];
foreach ($contas as $conta) {
    var_dump($conta);
}
