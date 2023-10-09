<?php

namespace ByteBank\Modelo\Conta;

use ByteBank\Modelo\Autenticavel;
use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Pessoa;
use ByteBank\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
  private Endereco $endereco;

  public function __construct(string $nome, CPF $cpf, Endereco $endereco)
  {
    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }

  public function getEndereco(): Endereco
  {
    return $this->endereco;
  }

  public function autenticaAcesso(string $senha): bool
  {
    return $senha == 'abcd';
  }
}
