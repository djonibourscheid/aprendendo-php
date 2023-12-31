<?php

namespace ByteBank\Modelo;

class Pessoa
{
  use AcessoPropriedades;

  protected string $nome;
  private CPF $cpf;


  public function __construct(string $nome, CPF $cpf)
  {
    if (!$this->validarNome($nome)) {
      echo 'Conta não criada.' . PHP_EOL;
      return;
    }

    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  final protected function validarNome(string $nome): bool
  {
    if (mb_strlen(trim($nome)) < 3) {
      throw new \LengthException('Nome muito curto.');
    }

    return true;
  }

  public function getNome(): string
  {
    return $this->nome;
  }
  public function getCPF(): string
  {
    return $this->cpf->getCPF();
  }
}
