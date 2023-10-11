<?php

namespace ByteBank\Modelo;

trait AcessoPropriedades
{
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
