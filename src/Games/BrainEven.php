<?php

namespace Brain\Games\BrainEven;

use function Brain\Engine\game;

function calculations(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function brainEven(): void
{
    $question = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $task = function (): array {
        $num = rand(1, 99);
        return ["$num", calculations($num)];
    };

    game($question, $task);
}
