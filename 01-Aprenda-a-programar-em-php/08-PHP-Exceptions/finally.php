<?php

try {
  echo "Executando" . PHP_EOL;
  // throw new Exception("Exceção");
} catch (Exception $e) {
  echo "Caindo no catch" . PHP_EOL;
} finally {
  echo "Caindo no finally" . PHP_EOL;
}
