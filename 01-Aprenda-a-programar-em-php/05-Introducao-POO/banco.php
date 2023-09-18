<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$djoni = new Titular(new CPF('000.000.000-00'), 'Djoni                ');
$contaDjoni = new Conta($djoni);
$contaDjoni->depositar(50.2);

$claudio = new Titular(new CPF('111.111.111-11'), 'Claudio');
$contaClaudio = new Conta($claudio);
$contaClaudio->depositar(31.6);

echo 'Total de contas: ' . Conta::getTotalDeContas() . PHP_EOL;

$contas = [$contaDjoni, $contaClaudio];
foreach ($contas as $conta) {
    var_dump($conta);
}
