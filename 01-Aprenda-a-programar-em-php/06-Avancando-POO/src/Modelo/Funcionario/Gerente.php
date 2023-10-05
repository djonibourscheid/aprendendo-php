<?php

namespace ByteBank\Modelo\Funcionario;

class Gerente extends Funcionario
{
  public function calculaBonificacao(): float
  {
    return $this->getSalario();
  }
}
