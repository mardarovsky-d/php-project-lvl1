<?php

namespace Brain\Games\BrainCalc;

use function cli\line;
use function Brain\Engine\game;

function brainCalc()
{
    $question = "What is the result of the expression?";

    $task = function() {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $randomOperation = rand(1, 3);
        if ($randomOperation === 1) {
            line("$num1 + $num2");
            return $num1 + $num2;
        } elseif ($randomOperation === 2) {
            line("$num1 * $num2");
            return $num1 * $num2;
        } else {
            line("$num1 - $num2");
            return $num1 - $num2;
        }
    };

    game($question, $task);
}
