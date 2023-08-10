<?php

$numero = 51;

echo "A tabuáda de $numero é:" . PHP_EOL;

for ($i = 1; $i < 11; $i++) {
  $resultado = $i * $numero;
  echo "$i x $numero = $resultado" . PHP_EOL;
}
