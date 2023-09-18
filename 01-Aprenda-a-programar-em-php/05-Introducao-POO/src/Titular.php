<?php

class Titular
{
  private CPF $cpf;
  private string $nome;

  public function __construct(CPF $cpf, string $nome)
  {
    if (!$this->validarNome($nome)) {
      echo 'Conta não criada.' . PHP_EOL;
      return;
    }

    $this->cpf = $cpf;
    $this->nome = trim($nome);
  }

  private function validarNome(string $nome): bool
  {
    if (mb_strlen(trim($nome)) < 5) {
      echo 'Nome não válido. Tente novamente.' . PHP_EOL;
      return false;
    }
    return true;
  }

  public function getCPF(): string
  {
    return $this->cpf->getCPF();
  }

  public function getNome(): string
  {
    return $this->nome;
  }
}
