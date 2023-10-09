<?php

namespace ByteBank\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function calculaBonificacao(): float
  {
    return $this->getSalario() * 0.5;
  }

  public function sobeDeNivel(): void
  {
    $this->recebeAumento($this->getSalario() * 0.75);
  }
}
