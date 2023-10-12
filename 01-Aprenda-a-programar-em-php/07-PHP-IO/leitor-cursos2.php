<?php

$cursos1 = file_get_contents("lista-cursos.txt");
echo $cursos1 . PHP_EOL . PHP_EOL;

// Cada linha é um índice no array
$cursos2 = file("lista-cursos.txt");
var_dump($cursos2);
