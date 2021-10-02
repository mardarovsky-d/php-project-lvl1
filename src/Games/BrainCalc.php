<?php

namespace Brain\Games\BrainCalc;

use function cli\line;
use function Brain\Engine\game;

function brainCalc(): void
{
    $question = "What is the result of the expression?";
    $task = function (): int {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $randomOperation = rand(1, 3);
        if ($randomOperation === 1) {
            line("Question: $num1 + $num2");
            return $num1 + $num2;
        } elseif ($randomOperation === 2) {
            line("Question: $num1 * $num2");
            return $num1 * $num2;
        } else {
            line("Question: $num1 - $num2");
            return $num1 - $num2;
        }
    };

    game($question, $task);
}
