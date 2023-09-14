<?php

use function PHPSTORM_META\type;

class Conta
{
  private $cpf;
  private $titular;
  private $saldo;
  private static $numeroDeContas = 0;

  public function __construct(string $cpf, string $titular)
  {
    if (!$this->validaTitular($titular)) {
      echo 'Conta não criada.' . PHP_EOL;
      return;
    }

    $this->saldo = 0;
    $this->cpf = trim($cpf);
    $this->titular = trim($titular);

    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }


  private function validaTitular(string $nome): bool
  {
    if (mb_strlen(trim($nome)) < 5) {
      echo 'Nome não válido. Tente novamente.' . PHP_EOL;
      return false;
    }
    return true;
  }


  public function getCpf(): string
  {
    return $this->cpf;
  }


  public function getTitular(): string
  {
    return $this->titular;
  }


  public function getSaldo(): float
  {
    return $this->saldo;
  }

  public static function getTotalDeContas(): int
  {
    return self::$numeroDeContas;
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
