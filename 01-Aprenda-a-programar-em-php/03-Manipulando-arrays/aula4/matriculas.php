<?php

$alunos2022 = ['teste' => 'Maria', 'João', 'Djoni', 'José'];
$novosAlunos = ['teste' => 'Ana', 'Victor', 'Claudio', 'Mario'];

$alunos2023 = array_merge($alunos2022, $novosAlunos);
// Sobrescreve os valores com chaves em string
var_dump($alunos2023);



// chaves: 0, 1, 2, 3, 4
$alunos2020 = ['Aluno1', 'Aluno2', 'Aluno3', 'Aluno4', 'Aluno5'];
// chaves: 'teste', 1, 2, 3, 4, 5, 6
$alunos2021 = ['teste' => 'Aluno1', 'Aluno2', 'Aluno6', 'Aluno7', 'Aluno8', 'Aluno9', 'Aluno10'];

$novosAlunos2 = $alunos2020 + $alunos2021;
// só junta os elementos com chaves nao repetidas
var_dump($novosAlunos2);


// Unpacking de arrays. Tem a mesma função do array_merge e pode colocar valores no meio
$novosAlunos3 = [...$novosAlunos, 'Alunos12' => 'Vera', ...$novosAlunos2];
var_dump($novosAlunos);