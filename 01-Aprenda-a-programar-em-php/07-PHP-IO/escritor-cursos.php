<?php

$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\n" . "PHP I/O: trabalhando com arquivos e streams";

fwrite($arquivo, $curso, 21);
fwrite($arquivo, $curso);
fclose($arquivo);
