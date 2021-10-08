<?php

namespace Brain\Games\BrainGCD;

use function Brain\Engine\game;

function calculations(int $num1, int $num2): string
{
    if ($num1 === 0 || $num2 === 0) {
        $num1 = rand(-99, 99);
        $num2 = rand(-99, 99);
    }
    $a = abs($num1);
    $b = abs($num2);
    while ($a !== $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return "$a";
}

function brainGCD(): void
{
    $question = "Find the greatest common divisor of given numbers.";
    $task = function (): array {
        $num1 = rand(-99, 99);
        $num2 = rand(-99, 99);
        return ["$num1 $num2", calculations($num1, $num2)];
    };

    game($question, $task);
}
