<?php

require_once './autoload.php';

use ByteBank\Modelo\{Endereco, CPF};
use ByteBank\Modelo\Conta\{Titular, ContaCorrente};

$endereco = new Endereco('Teutônia', 'Tal', 'Av. Nossa', '155');
$djoni = new Titular(' Djoni', new CPF('999.999.999-99'), $endereco);
$contaDjoni = new ContaCorrente($djoni);
$contaDjoni->depositar(100);
$contaDjoni->sacar(10);
