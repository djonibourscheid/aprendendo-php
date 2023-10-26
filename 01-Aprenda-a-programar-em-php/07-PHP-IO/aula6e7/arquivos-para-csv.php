<?php

$cursosFinalizados = file('../aula1/lista-cursos.txt');
$outrosCursos = file('../aula1/cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($cursosFinalizados as $curso) {
  if (mb_strlen($curso) > 1) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
  }
}

foreach ($outrosCursos as $curso) {
  if (mb_strlen($curso) > 1) {
    $linha = [trim(utf8_decode($curso)), utf8_decode('Não')];
    fputcsv($arquivoCsv, $linha, ';');
  }
}

fclose($arquivoCsv);
