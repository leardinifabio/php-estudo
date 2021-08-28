<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorDepositar): array
{
    if ($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function sacar(array $conta, float $valorSacar): array
{
    if ($valorSacar <= $conta['saldo']) {
        $conta['saldo'] -= $valorSacar;
    } else {
        exibeMensagem("Você não possui saldo suficiente.");
    }
    return $conta;
}
