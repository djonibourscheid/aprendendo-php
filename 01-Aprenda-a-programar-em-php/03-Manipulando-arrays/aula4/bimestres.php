<?php

$notasBimestre1 = [
  'Ana' => 9,
  'Vinicius' => 6,
  'Maria' => 10,
  'Claudio' => 5,
  'José' => 7
];

$notasBimestre2 = [
  'Ana' => 7,
  'Vinicius' => 6,
  'Maria' => 8,
  'Claudio' => 5,
];

// Compara os valores entre cada array
var_dump(array_diff($notasBimestre1, $notasBimestre2));
// O 7 de José no 1° bi existe em Ana no 2° bi
// Já o 9 de Ana no 1°bi não existe no 2° bi.

// Compara as chaves entre cada array
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
// José não tem notas no 2° bi

// Compara chaves com valores
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
// Verifica se Ana com nota 9 no 1° bi, continua com 9 no 2° bi. Caso não exista no 2° bi ou mudou de nota, é retornado chave e valor.
