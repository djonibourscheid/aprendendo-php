<?php

class CPF
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
      echo 'CPF inválido. Tente novamente.'  . PHP_EOL;
      return false;
    }
    return true;
  }

  public function getCPF(): string
  {
    return $this->cpf;
  }
}
