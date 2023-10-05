<?php

namespace ByteBank\Modelo\Funcionario;

class Diretor extends Funcionario
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
