<?php

use ByteBank\Modelo\Conta\ContaCorrente;
use ByteBank\Modelo\Conta\Titular;
use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Endereco;

require_once 'autoload.php';

$cc = new ContaCorrente(
  new Titular(
    'Djoni',
    new CPF('000.000.000-00'),
    new Endereco('Cidade', 'bairro', 'rua', '100')
  )
);

try {

  $cc->depositar(-100);
} catch (InvalidArgumentException $exception) {
  echo "Valor de deposito precisa ser positivo." . PHP_EOL;
}
