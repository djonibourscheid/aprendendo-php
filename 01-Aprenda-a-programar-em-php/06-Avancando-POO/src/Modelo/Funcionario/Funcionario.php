<?php

namespace ByteBank\Modelo\Funcionario;

use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
  private float $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function setNome(string $nome): bool
  {
    if (!$this->validarNome($nome)) {
      echo 'Erro ao alterar nome. Tente novamente.' . PHP_EOL;
      return false;
    }

    $this->nome = $nome;
    return true;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento < 0) {
      echo 'Aumento deve ser positivo';
      return;
    }

    $this->salario += $valorAumento;
    echo "Novo salário: R$ {$this->getSalario()}." . PHP_EOL;
  }

  abstract public function calculaBonificacao(): float;
}
