<?php

require_once './autoload.php';

use ByteBank\Modelo\{Funcionario, CPF};
use ByteBank\Service\ControladorDeBonificacoes;

$djoni = new Funcionario(
  'Djoni Bourscheid',
  new CPF('111.111.111-11'),
  'Desenvolvedor Júnior',
  '1000'
);

$jose = new Funcionario(
  'José de Seilaoq',
  new CPF('000.000.000-00'),
  'Fazedor de café',
  '500'
);


$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacaoDe($djoni);
$controlador->addBonificacaoDe($jose);
echo $controlador->getTotalBonificacoes()  . PHP_EOL;
