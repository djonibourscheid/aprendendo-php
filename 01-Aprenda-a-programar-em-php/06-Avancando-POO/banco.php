<?php
require_once './autoload.php';

use ByteBank\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use ByteBank\Modelo\{Funcionario, CPF, Endereco};

$endereco = new Endereco('POA', 'um bairro', 'rua tal de tal', '29');

$djoni = new Titular('Djoni ', new CPF('000.000.000-00'), $endereco);
$contaDjoni = new ContaCorrente($djoni);
$contaDjoni->depositar(50.2);

$claudio = new Titular('Claudio', new CPF('111.111.111-11'), $endereco);
$contaClaudio = new ContaPoupanca($claudio);
$contaClaudio->depositar(31.6);

$contaDjoni->transferir(50, $contaClaudio);


$funcionario = new Funcionario('Funcionario', new CPF('999.999.999-99'), 'Entregador', '9000');
var_dump($funcionario);
$funcionario->setNome('Funcionario Carlos');
var_dump($funcionario);


echo 'Total de contas: ' . Conta::getTotalDeContas() . PHP_EOL;

$contas = [$contaDjoni, $contaClaudio];
foreach ($contas as $conta) {
  var_dump($conta);
}
