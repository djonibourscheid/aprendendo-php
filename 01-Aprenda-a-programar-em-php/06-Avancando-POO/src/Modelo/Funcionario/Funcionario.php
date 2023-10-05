<?php

namespace ByteBank\Modelo\Funcionario;

use ByteBank\Modelo\CPF;
use ByteBank\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
  private string $cargo;
  private float $salario;

  public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->cargo = trim($cargo);
    $this->salario = $salario;
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

  public function calculaBonificacao(): float
  {
    return $this->salario * 0.01;
  }
}
