<?php

namespace Brain\Games\BrainPrime;

use function Brain\Engine\game;

function calculations(int $primeNum): string
{
    if ($primeNum === 1) {
        return 'no';
    }
    if ($primeNum === 2) {
        return 'yes';
    }
    $result = '';
    for ($i = 2; $i < $primeNum; $i++) {
        if ($primeNum % $i !== 0) {
            $result = 'yes';
        } else {
            return 'no';
        }
    }
    return $result;
}

function brainPrime(): void
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $task = function (): array {
        $num = rand(1, 99);
        return ["$num", calculations($num)];
    };

    game($question, $task);
}
