<?php

$nomeCompleto = "Djoni Bourscheid";

// Separando
[$nome, $sobrenome] = explode(' ', $nomeCompleto);
echo "Nome: " . $nome . PHP_EOL . "Sobrenome: " . $sobrenome . PHP_EOL;


// Unindo
$novoNome = implode(' ', [$nome, 'L.', $sobrenome]);
echo PHP_EOL . $novoNome . PHP_EOL;

$telefones = ['(51) 9999-9999', '(11) 99999-9999'];
echo implode(' | ', $telefones) . PHP_EOL;


// Aparando stigns, apenas as laterais.
$csv = ',,.Djoni Bourscheid,  .';

echo trim($csv, ',. ') . PHP_EOL;
echo rtrim($csv, ',. ') . PHP_EOL;
echo ltrim($csv, ',. ') . PHP_EOL;