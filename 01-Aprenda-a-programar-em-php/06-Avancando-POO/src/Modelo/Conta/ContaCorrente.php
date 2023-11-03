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
    $tarifaSaque = $valor * $this->percentualTarifa();
    $valorComTarifa = $valor + $tarifaSaque;

    if ($valorComTarifa > $this->saldo) {
      throw new SaldoInsuficienteException($valorComTarifa, $this->saldo);
    }

    if ($valorComTarifa < 0) {
      echo 'Valor inválido. Tente novamente.' . PHP_EOL;
      return false;
    }

    $this->sacar($valor);
    $contaDestino->depositar($valor);

    $porcentagemTarifa = $this->percentualTarifa() * 100;
    echo "Transferência completa. Cobrado $porcentagemTarifa% como tarifa de transferência." . PHP_EOL;
    return true;
  }
}
