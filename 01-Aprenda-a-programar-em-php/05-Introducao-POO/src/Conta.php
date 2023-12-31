<?php

class Conta
{
  private Titular $titular;
  private float $saldo;
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
    if ($valor > $this->saldo) {
      echo "Saldo insuficiente. Saldo atual é de {$this->saldo} reais" . PHP_EOL;
      return false;
    }

    $this->saldo -= $valor;
    echo "$valor reais foram sacados. Saldo atual é de {$this->saldo} reais" . PHP_EOL;
    return true;
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
    echo 'Transferência completa.';
    return true;
  }
}
