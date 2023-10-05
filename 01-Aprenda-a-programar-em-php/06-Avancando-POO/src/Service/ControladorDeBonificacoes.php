<?php

namespace ByteBank\Service;

use ByteBank\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
  private $totalBonificacoes = 0;

  public function addBonificacaoDe(Funcionario $funcionario): void
  {
    $this->totalBonificacoes += $funcionario->calculaBonificacao();;
  }

  public function getTotalBonificacoes(): float
  {
    return $this->totalBonificacoes;
  }
}
