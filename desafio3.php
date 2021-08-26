<?php

$peso = 70;
$altura = 1.70;
$imc = $peso / ($altura * $altura);

if ($imc < 16) {
    echo "Seu IMC é $imc e você está na categoria SUBPESO SEVERO" . PHP_EOL;
} elseif ($imc >= 16 and $imc <= 19.9) {
    echo "Seu IMC é $imc e você está na categoria SUBPESO" . PHP_EOL;
} elseif ($imc > 19.9 and $imc <= 24.9) {
    echo "Seu IMC é $imc e você está na categoria NORMAL" . PHP_EOL;
} elseif ($imc > 24.9 and $imc <= 29.9) {
    echo "Seu IMC é $imc e você está na categoria SOBREPESO" . PHP_EOL;
} elseif ($imc > 29.9 and $imc <= 39.9) {
    echo "Seu IMC é $imc e você está na categoria OBESIDADE" . PHP_EOL;
} else {
    echo "Seu IMC é $imc e você está na categoria OBESIDADE MÓRBIDA" . PHP_EOL;
}
