<?php

namespace ByteBank\Modelo;

final class CPF
{
  private string $cpf;

  public function __construct(string $cpf)
  {
    $this->validaCPF($cpf);
    $this->cpf = trim($cpf);
  }

  public function validaCPF(string $cpf): bool
  {
    $regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/';
    $cpfValido = preg_match($regex, $cpf);
    if (!$cpfValido) {
      throw new \InvalidArgumentException('CPF informado em desacordo com o padrão 000.000.000-00');
    }

    return true;
  }

  public function getCPF(): string
  {
    return $this->cpf;
  }
}
