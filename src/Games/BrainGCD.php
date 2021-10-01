<?php

namespace Brain\Games\BrainGCD;

use function cli\line;
use function Brain\Engine\game;

function brainGCD()
{
    $question = "Find the greatest common divisor of given numbers.";
    $task = function () {
        $num1 = rand(-99, 99);
        $num2 = rand(-99, 99);
        if ($num1 === 0 || $num2 === 0) {
            $num1 = rand(-99, 99);
            $num2 = rand(-99, 99);
        }
        line("$num1 $num2");
        $a = abs($num1);
        $b = abs($num2);
        while ($a != $b)
            if ($a>$b)
                $a -= $b;
            else
                $b -= $a;
        return $a;
    };

    game($question, $task);
}
