<?php
require_once 'MeuFiltro.php';

$arquivoCursos = fopen('../aula1/lista-cursos.txt', 'r');

stream_filter_register('cursos-php', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'cursos-php');

echo fread($arquivoCursos, filesize('../aula1/lista-cursos.txt')) . PHP_EOL;
