<?php

$cursos = fopen('cursos.csv', 'r');

while (($linha = fgetcsv($cursos, null, ';')) !== false) {
  var_dump($linha);
}

fclose($cursos);
