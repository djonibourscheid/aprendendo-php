<?php
$lista = [12, 21, 35, 7, 85, 211, 31, 23, 52];

$lista[] = 213;

foreach ($lista as $numero) {
  echo "$numero, ";
}

echo PHP_EOL;
echo PHP_EOL;

$contas = ['123.123.123-12' => "José", '000.000.000-00' => 'Claudio'];
$contas[] = 'Mario';

foreach ($contas as $cpf => $conta) {
  echo "O cpf $cpf é do $conta" . PHP_EOL;
}