<?php

$texto = 'Texto com palavrões: catapimbas e poxa';
echo str_replace(['catapimbas', 'poxa'], '***', $texto) . PHP_EOL;

echo strtr($texto, 'poxa', '****') . PHP_EOL; // substitui letra por letra
echo strtr($texto, ['poxa'=>'p','catapimbas'=>'c']) . PHP_EOL; // substitui chave por valor