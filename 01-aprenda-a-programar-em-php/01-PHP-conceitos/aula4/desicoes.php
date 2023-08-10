<?php

$idade = 18;
$acompanhado = false;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo 'Você é de maior. Pode entrar.';
} elseif ($idade >= 16 && $acompanhado == true) {
  echo 'Você só pode entrar porque está acompanhado.';
} else {
  echo 'Você não está acompanhado e nem é de maior. Não pode entrar';
}

// If ternário
$mensagem = $idade >= 18 ? "Pode beber" : "Não pode beber";
echo PHP_EOL . $mensagem;
