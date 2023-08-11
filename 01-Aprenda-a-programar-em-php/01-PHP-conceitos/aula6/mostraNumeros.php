<?php

echo 'Os números ímpares de 1 a 100 são:' . PHP_EOL;
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 1) {
    echo "$i, ";
  }
  if ($i % 10 == 0 && $i != 0) {
    echo PHP_EOL;
  }
}

echo PHP_EOL . 'Os números pares de 1 a 100 são:' . PHP_EOL;
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 0) {
    echo "$i, ";
  }
  if ($i % 10 == 0 && $i != 0) {
    echo PHP_EOL;
  }
}
