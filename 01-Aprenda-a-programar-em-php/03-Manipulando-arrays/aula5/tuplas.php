<?php

$dados1 = ['Djoni', 10, 18];

// list($nome, $nota, $idade) = $dados;
[$nome1, $nota1, $idade1] = $dados1;
var_dump($nome1, $nota1, $idade1);
echo PHP_EOL;


$dados2 = [
  'nome' => 'José',
  'nota' => 8,
  'idade' => 15,
];

// cria variáveis com base no nome da chave
extract($dados2);
var_dump($nome, $nota, $idade);
echo PHP_EOL;


// cria uma lista com base nas variaveis
var_dump(compact('nome1', 'nota1', 'idade1'));