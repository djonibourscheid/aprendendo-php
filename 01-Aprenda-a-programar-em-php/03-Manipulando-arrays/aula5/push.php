<?php

$alunosSala1 = ['Maria', 'João', 'Djoni', 'José'];
$alunosSala2 = ['Ana', 'Victor', 'Claudio', 'Mario'];

$alunos = [...$alunosSala1, ...$alunosSala2];

// Adicionar no final
array_push($alunos, 'Vera', 'Bob', 'Carlos');
$alunos[] = 'Luiz';

// Adicionar no início
array_unshift($alunos, 'Stéfany');
var_dump($alunos);

echo array_shift($alunos) . PHP_EOL;
var_dump($alunos);