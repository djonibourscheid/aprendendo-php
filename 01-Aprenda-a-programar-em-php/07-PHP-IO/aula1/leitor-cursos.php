<?php

$arquivo = fopen("lista-cursos.txt", "r");

// ler linha a linha
// while (!feof($arquivo)) {
//   $curso = fgets($arquivo);
//   echo $curso;
// }


// Ler arquivo todo
$tamanhoDoArquivo = filesize("lista-cursos.txt");
$cursos = fread($arquivo, $tamanhoDoArquivo);
echo $cursos;

fclose($arquivo);
