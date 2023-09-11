<?php

$email = 'josé@email.com.br';
$senha = '123aá'; // 5 carcateres 6 bytes

echo strlen($senha) . PHP_EOL; // mostra quantos bytes tem a string
echo mb_strlen($senha) . PHP_EOL;

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);
echo $usuario . PHP_EOL;
echo strtoupper($usuario) . PHP_EOL;
echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;