<?php

require_once './autoload.php';

use ByteBank\Modelo\{Endereco, CPF};
use ByteBank\Modelo\Conta\{Titular, ContaCorrente, SaldoInsuficienteException};

$endereco = new Endereco('Teutônia', 'Tal', 'Av. Nossa', '155');
$djoni = new Titular(' Djoni', new CPF('999.999.999-99'), $endereco);
$contaDjoni = new ContaCorrente($djoni);
$contaDjoni->depositar(100);
$contaDjoni->sacar(10);

try {
  $contaDjoni->sacar(100);
} catch (SaldoInsuficienteException $e) {
  echo '----------' . PHP_EOL;
  echo "Você não tem saldo para realizar este saque" . PHP_EOL;
  echo $e->getMessage() . PHP_EOL;
  echo '----------' . PHP_EOL;
}

echo 'Saldo atual é de: R$ ' . $contaDjoni->getSaldo() . PHP_EOL;
