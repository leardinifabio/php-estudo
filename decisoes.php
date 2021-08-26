<?php

$idade = 16;

echo "Você só pode entrar se tiver mais de 18 anos!" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos e pode entrar" . PHP_EOL;
} else {
    echo "Você tem $idade anos e não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!";
