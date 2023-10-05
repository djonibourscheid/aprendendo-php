<?php

namespace ByteBank\Modelo\Conta;

abstract class Conta
{
  private Titular $titular;
  protected float $saldo;
  private static int $numeroDeContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }


  public function getSaldo(): float
  {
    return $this->saldo;
  }

  public static function getTotalDeContas(): int
  {
    return self::$numeroDeContas;
  }

  public function getCPF(): string
  {
    return $this->titular->getCPF();
  }

  public function getNome(): string
  {
    return $this->titular->getNome();
  }

  public function depositar(float $valor): bool
  {
    if ($valor < 0) {
      echo 'Valor inválido. Tente novamente.' . PHP_EOL;
      return false;
    }

    $this->saldo += $valor;
    echo "$valor reais depositados. Saldo é de R$ {$this->saldo}" . PHP_EOL;
    return true;
  }

  public function sacar(float $valor): bool
  {
    $tarifaSaque = $valor * $this->percentualTarifa();
    $valorComTarifa = $valor + $tarifaSaque;

    if (!$this->verificarSaldoParaSaque($valorComTarifa)) {
      return false;
    }

    $this->saldo -= $valorComTarifa;
    echo "$valor reais foram sacados. Tarifa de saque: R$ $tarifaSaque. Saldo atual é de {$this->saldo} reais" . PHP_EOL;
    return true;
  }

  abstract protected function percentualTarifa(): float;

  protected function verificarSaldoParaSaque(float $valorComTarifa): bool
  {
    if ($valorComTarifa > $this->saldo) {
      echo "Saldo insuficiente. Saldo atual é de {$this->saldo} reais, é necessario ter R$ $valorComTarifa devido a tarifa" . PHP_EOL;
      return false;
    }
  }
}
