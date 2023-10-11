<?php

namespace ByteBank\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
class Endereco
{
  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;

  public function __construct(string $cidade, string $bairro, string $rua, string $numero)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }

  public function getCidade(): string
  {
    return $this->cidade;
  }
  public function getBairro(): string
  {
    return $this->bairro;
  }
  public function getRua(): string
  {
    return $this->rua;
  }
  public function getNumero(): string
  {
    return $this->numero;
  }

  public function setCidade(string $novaCidade): bool
  {
    if (strlen($novaCidade) < 0) {
      echo 'Cidade inválida. Tente outra.' . PHP_EOL;
      return false;
    }

    echo 'Cidade alterada com sucesso.' . PHP_EOL;
    $this->cidade = $novaCidade;
    return true;
  }

  public function __toString(): string
  {
    return "{$this->rua}, {$this->numero}, {$this->bairro} - {$this->cidade}";
  }

  public function __get(string $nomeAtributo): string
  {
    $metodo = 'get' . ucfirst($nomeAtributo);
    return $this->$metodo();
  }

  public function __set(string $nomeAtributo, string $valor): void
  {
    $metodo = 'set' . ucfirst($nomeAtributo);
    $this->$metodo($valor);
  }
}
