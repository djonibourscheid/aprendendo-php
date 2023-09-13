<?php

class Conta
{
  private $cpf;
  private $titular;
  private $saldo;

  public function setTitular(string $nome): void
  {
    $this->titular = trim($nome);
    return;
  }

  public function getTitular(): string
  {
    return $this->titular;
  }


  public function setSaldo(float $valor): void
  {
    $this->saldo += $valor;
    return;
  }

  public function getSaldo(): float
  {
    return $this->saldo;
  }
}