<?php

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos.txt', "$novoCurso\n", FILE_APPEND);
fwrite(STDOUT, "Seu curso '$novoCurso' foi adicionado.\n");

echo PHP_EOL . PHP_EOL . 'Lista de cursos';

$cursos = fopen('../aula1/lista-cursos.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);
echo PHP_EOL;
