<?php
require_once './autoload.php';

use ByteBank\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca, Conta};
use ByteBank\Modelo\{Funcionario, CPF, Endereco};

$endereco = new Endereco('POA', 'um bairro', 'rua tal de tal', '29');

$djoni = new Titular('Djoni ', new CPF('000.000.000-00'), $endereco);
$contaDjoni = new ContaCorrente($djoni);
$contaDjoni->depositar(50);

$claudio = new Titular('Claudio', new CPF('111.111.111-11'), $endereco);
$contaClaudio = new ContaPoupanca($claudio);
$contaClaudio->depositar(30);

$contaDjoni->transferir(30, $contaClaudio);

echo 'Total de contas: ' . Conta::getTotalDeContas() . PHP_EOL;
