<?php

$contas = [
  '111.111' => [
    'titular' => 'josé',
    'saldo' => 200,
  ],
  '222.222' => [
    'titular' => 'arnaldo',
    'saldo' => 00,
  ],
];


// Passando apenas o valor (o php copia as infos e não passa a referencia da memoria da conta 111.111)
function maisculaValor(array $conta)
{
  return $conta['titular'] = mb_strtoupper($conta['titular']);
}

echo maisculaValor($contas['111.111']) . PHP_EOL;


// Passando a referencia da conta (devido ao &)
function maisculaReferencia(array &$conta)
{
  return $conta['titular'] = mb_strtoupper($conta['titular']);
}
echo maisculaReferencia($contas['222.222']) . PHP_EOL;


echo PHP_EOL . 'Nomes na variável contas:' . PHP_EOL;
foreach ($contas as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL;
}