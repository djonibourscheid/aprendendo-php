<?php

require_once 'autoload.php';

use ByteBank\Modelo\Endereco;


$umEndereco = new Endereco(
  'Petrópolis',
  'bairro qualquer',
  'Minha rua',
  '71b'
);
$outroEndereco = new Endereco(
  'Rio',
  'Centro',
  'Uma rua aí',
  '50'
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo PHP_EOL;

echo $umEndereco->bairro  . PHP_EOL; // __get()
$umEndereco->cidade = 'POA'; // __set()
