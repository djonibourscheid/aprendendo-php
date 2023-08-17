<?php

$notas = [
  'Ana' => 9,
  'Vinicius' => 6,
  'Maria' => '10',
  'Claudio' => 5,
  'José' => null
];

// Verificar se a chave existe no array
echo 'Djoni existe nas notas?';
var_dump(array_key_exists('Djoni', $notas)) . PHP_EOL; // False

echo 'Ana existe nas notas?';
var_dump(array_key_exists('Ana', $notas)) . PHP_EOL; // True


echo PHP_EOL;


// Verifica se dentro do array existe o indice e vê se ele não tem valor null
echo 'José fez a prova?';
var_dump(isset($notas['José'])) . PHP_EOL; // false


echo PHP_EOL;


// Verifica se alguém tirou 10
echo 'Alguém tirou 4?';
var_dump(in_array(4, $notas)) . PHP_EOL; // false
echo 'Alguém tirou 10?';
var_dump(in_array(10, $notas)) . PHP_EOL; // true pq não é estrito
echo 'Alguém tirou 10 (usando strict)?';
var_dump(in_array(10, $notas, true)) . PHP_EOL; // false pq é estrito


echo PHP_EOL;


$chave = array_search(10, $notas); // true pq nao usa o strict
$chave2 = (array_search(10, $notas, true)) ?: 'Ningém'; // false pq usa o strict | Passando 'Ninguem' para a variável usando if ternario
echo "Quem tirou 10? $chave" . PHP_EOL;
echo "Quem tirou 10 (usando strict)? $chave2";


// array_key_exists = verifica se a chave existe
// isset = verifica se a chave existe e não é nula
// in_array = verifica se o valor existe no array
// array_search = retorna a chave do valor procurado ou false