<?php

require_once './autoload.php';

use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use ByteBank\Service\ControladorDeBonificacoes;

$djoni = new Desenvolvedor(
  'Djoni Bourscheid',
  new CPF('111.111.111-11'),
  '1000'
);

$djoni->recebeAumento(500);

$jose = new Gerente(
  'José de Seilaoq',
  new CPF('000.000.000-00'),
  '2000'
);

$carlos = new Diretor(
  'Carlos do santos',
  new CPF('333.333.333-33'),
  '5000'
);


$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacaoDe($djoni);
$controlador->addBonificacaoDe($jose);
$controlador->addBonificacaoDe($carlos);

echo $controlador->getTotalBonificacoes() . PHP_EOL;
