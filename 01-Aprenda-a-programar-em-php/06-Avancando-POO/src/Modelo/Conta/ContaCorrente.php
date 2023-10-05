<?php

namespace ByteBank\Modelo\Conta;

class ContaCorrente extends Conta
{
  protected function percentualTarifa(): float
  {
    return 0.05; // 5%
  }

  public function transferir(float $valor, Conta $contaDestino): bool
  {
    if ($valor > $this->saldo) {
      echo "Saldo insuficiente. Saldo atual é de {$this->saldo} reais" . PHP_EOL;
      return false;
    }

    if ($valor < 0) {
      echo 'Valor inválido. Tente novamente.' . PHP_EOL;
      return false;
    }

    $this->sacar($valor);
    $contaDestino->depositar($valor);
    $porcentagemTarifa = $this->percentualTarifa() * 100;
    echo "Transferência completa. Cobrado $porcentagemTarifa% como tarifa de saque/transferência.";
    return true;
  }
}
