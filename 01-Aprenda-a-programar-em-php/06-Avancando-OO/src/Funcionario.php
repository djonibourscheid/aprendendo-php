<?php

class Funcionario extends Pessoa
{
  private string $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo)
  {
    parent::__construct($nome, $cpf);
    $this->cargo = trim($cargo);
  }

  public function getCargo(): string
  {
    return $this->cargo;
  }

  public function setNome(string $nome): bool
  {
    if (!$this->validarNome($nome)) {
      echo 'Erro ao alterar nome. Tente novamente.' . PHP_EOL;
      return false;
    }

    $this->nome = $nome;
    echo 'Nome alterado com sucesso.';
    return true;
  }
}
