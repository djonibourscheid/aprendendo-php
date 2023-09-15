<?php
require_once './src/Pessoa.php';
require_once './src/Titular.php';
require_once './src/Funcionario.php';
require_once './src/CPF.php';
require_once './src/Endereco.php';
require_once './src/Conta.php';


$endereco = new Endereco('POA', 'um bairro', 'rua tal de tal', '29');

$djoni = new Titular('Djoni ', new CPF('000.000.000-00'), $endereco);
$contaDjoni = new Conta($djoni);
$contaDjoni->depositar(50.2);

$claudio = new Titular('Claudio', new CPF('111.111.111-11'), $endereco);
$contaClaudio = new Conta($claudio);
$contaClaudio->depositar(31.6);


$funcionario = new Funcionario('Funcionario', new CPF('999.999.999-99'), 'Entregador');
var_dump($funcionario);
$funcionario->setNome('Funcionario Carlos');
var_dump($funcionario);


echo 'Total de contas: ' . Conta::getTotalDeContas() . PHP_EOL;

$contas = [$contaDjoni, $contaClaudio];
foreach ($contas as $conta) {
  var_dump($conta);
}
