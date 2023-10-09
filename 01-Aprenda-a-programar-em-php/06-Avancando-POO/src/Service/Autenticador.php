<?php

namespace ByteBank\Service;

use ByteBank\Modelo\Autenticavel;

class Autenticador
{
  public function login(Autenticavel $autenticavel, string $senha): void
  {
    if ($autenticavel->autenticaAcesso($senha)) {
      echo 'Usuário logado no sistema' . PHP_EOL;
    } else {
      echo 'Senha incorreta.' . PHP_EOL;
    }
  }
}
