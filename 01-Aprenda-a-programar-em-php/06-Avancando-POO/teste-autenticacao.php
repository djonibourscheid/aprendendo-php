<?php

use ByteBank\Modelo\Conta\Titular;
use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Endereco;
use ByteBank\Modelo\Funcionario\Diretor;
use ByteBank\Modelo\Funcionario\Gerente;
use ByteBank\Service\Autenticador;

require_once './autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
  'João',
  new CPF('111.111.111-11'),
  4000
);
$autenticador->login($diretor, '1234'); // senha é 1234

$gerente = new Gerente(
  'Claudio',
  new CPF('222.222.222-22'),
  2000
);
$autenticador->login($gerente, '1234'); // senha é 4321


$titular = new Titular(
  'Miro',
  new CPF('222.222.222-22'),
  new Endereco('POA', 'Leste','R. Dois','150')
);
$autenticador->login($titular, 'abcd'); // senha é abcd