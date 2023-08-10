<?php

$contador = 1;

echo "Usando while" . PHP_EOL;
while ($contador <= 10) {
  echo "Aluno $contador" . PHP_EOL;
  $contador++;
}

echo PHP_EOL;

echo "Usando for" . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
  // Pulando o aluno 6
  if ($i == 6) {
    continue;
  }

  // Parando no aluno 8
  if ($i == 8) {
    break;
  }

  echo "Aluno $i" . PHP_EOL;
}
