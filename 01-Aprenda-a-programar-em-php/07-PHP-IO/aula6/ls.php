<?php

$diretorioPastas = dir('..');

$quantidadeAulas = 0;
$quantidadeExercicios = 0;

while ($arquivo = $diretorioPastas->read()) {
  if (str_starts_with($arquivo, 'aula')) {
    $quantidadeAulas++;
    echo PHP_EOL . "Na $arquivo, foram encontados:" . PHP_EOL;

    $diretorioAula = dir("../$arquivo");

    while ($aula = $diretorioAula->read()) {
      if (str_ends_with($aula, '.php')) {
        echo $aula . PHP_EOL;

        $quantidadeExercicios++;
      }
    }
  }
}

echo PHP_EOL . "No curso de PHP IO, temos $quantidadeAulas aulas e $quantidadeExercicios execercícios." . PHP_EOL;
