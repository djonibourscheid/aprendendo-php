<?php

$cursosFinalizados = file('../aula1/lista-cursos.txt');
$outrosCursos = file('../aula1/cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($cursosFinalizados as $curso) {
  if (mb_strlen($curso) > 1) {
    $linha = [trim($curso), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
  }
}

foreach ($outrosCursos as $curso) {
  if (mb_strlen($curso) > 1) {
    $linha = [trim($curso), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
  }
}

fclose($arquivoCsv);
