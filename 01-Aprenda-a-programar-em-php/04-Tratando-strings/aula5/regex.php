<?php

$telefones = ['(51) 9999-9999', 'a(11) 99999-9999', '(51) 91234-1234'];

foreach ($telefones as $telefone) {
  echo PHP_EOL;

  $regex = '/^\(([0-9]{2})\) (9?[0-9]{4}\-[0-9]{4})$/';
  
  $telefoneValido = preg_match(
    $regex,
    $telefone,
    $correspondencia
  );

  var_dump($correspondencia);

  if ($telefoneValido) {
    echo 'Telefone válido.' . PHP_EOL;
  } else {
    echo 'Telefone inválido.' . PHP_EOL;
  }


  echo preg_replace(
    $regex,
    '(xx) \2',
    $telefone
  );
}