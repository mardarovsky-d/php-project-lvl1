<?php

namespace Brain\Games\BrainEven;

use function Brain\Engine\game;

function brainEven(): void
{
    $question = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    function calculations(int $num): string
    {
        if ($num % 2 === 0) {
            return 'yes';
        } else {
            return 'no';
        }
    }
    $task = function (): array {
        $num = rand(1, 99);
        return ["$num", calculations($num)];
    };

    game($question, $task);
}
