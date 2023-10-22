<?php

$arquivoCursos = fopen('../aula1/lista-cursos.txt', 'r');

stream_filter_append($arquivoCursos, 'string.toupper');
echo fread($arquivoCursos, filesize('../aula1/lista-cursos.txt')) . PHP_EOL;
