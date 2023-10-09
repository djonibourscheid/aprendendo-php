<?php

namespace ByteBank\Modelo\Funcionario;

use ByteBank\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
  public function calculaBonificacao(): float
  {
    return $this->getSalario() * 2;
  }

  public function autenticaAcesso(string $senha): bool
  {
    return $senha == '1234';
  }
}
