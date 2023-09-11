<?php

$nomeCompleto = "Djoni Bourscheid";

// Separando
[$nome, $sobrenome] = explode(' ', $nomeCompleto);
echo "Nome: " . $nome . PHP_EOL . "Sobrenome: " . $sobrenome . PHP_EOL;

// Unindo
$novoNome = implode(' ', [$nome, 'L.', $sobrenome]);
echo PHP_EOL . $novoNome . PHP_EOL;