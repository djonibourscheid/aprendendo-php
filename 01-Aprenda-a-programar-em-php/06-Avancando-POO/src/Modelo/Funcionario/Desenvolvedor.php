<?php

namespace ByteBank\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function sobeDeNivel(): void
  {
    $this->recebeAumento($this->getSalario() * 0.75);
  }
}
