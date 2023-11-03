<?php

namespace ByteBank\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
  public function __construct(float $valor, float $saldo)
  {
    $mensagem = "Saldo insuficiente. Saldo atual é de $saldo reais, é necessario ter R$ $valor devido a tarifa.";
    parent::__construct($mensagem);
  }
}
