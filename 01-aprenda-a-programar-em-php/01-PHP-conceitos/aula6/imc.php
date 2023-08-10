<?php

$peso = 58;
$altura = 1.75; // usando altura em metros

// formatando o imc para ficar com duas casas decimais
$calculoIMC = number_format($peso / ($altura ** 2), 2, '.');

echo "O calculo do seu imc é $calculoIMC. ";

if ($calculoIMC < 18.5) {
  echo 'Você está com magresa.';
} elseif ($calculoIMC >= 18.5 && $calculoIMC < 25) {
  echo 'Você está normal.';
} elseif ($calculoIMC >= 25 && $calculoIMC < 30) {
  echo 'Você está com sobrepeso. Obesidade tipo I';
} elseif ($calculoIMC >= 30 && $calculoIMC < 40) {
  echo 'Você está com obesidade. Obesidade tipo II';
} else {
  echo 'Você está com obesidade grave. Obesidade tipo III';
}
