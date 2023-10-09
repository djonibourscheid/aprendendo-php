<?php

namespace ByteBank\Modelo\Funcionario;

use ByteBank\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
  public function calculaBonificacao(): float
  {
    return $this->getSalario();
  }
  
  public function autenticaAcesso(string $senha): bool
  {
    return $senha == '4321';
  }
}
