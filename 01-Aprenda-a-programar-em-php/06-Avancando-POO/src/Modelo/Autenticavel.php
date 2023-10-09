<?php

namespace ByteBank\Modelo;

interface Autenticavel
{
  public function autenticaAcesso(string $senha): bool;
}
