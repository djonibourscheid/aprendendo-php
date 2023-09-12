<?php

$nomeDeUsuario = "Djoni";

// NOWDOC (não permite interpolacao de variavel, equivalente as aspas simples)
$mensagem1 = <<<'FINAL'
  Olá, $nomeDeUsuario!
  Seja bem vindo(a) a nossa plataforma!
  FINAL;

echo $mensagem1 . PHP_EOL . PHP_EOL;


// HEREDOC (permite interpolacao de variavel, equivalente as aspas duplas)
$mensagem2 = <<<ACABAR
    Olá, $nomeDeUsuario!
    Seja bem vindo(a) a nossa plataforma!
  ACABAR;

echo $mensagem2;