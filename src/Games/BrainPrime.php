<?php

namespace Brain\Games\BrainPrime;

use function cli\line;
use function Brain\Engine\game;

function brainPrime(): void
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $task = function () {
        $num = rand(1, 99);
        line("Question: $num");
        $result = '';
        if ($num === 1) {
            $result = 'no';
        }
        if ($num === 2) {
            $result = 'yes';
        }
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i !== 0) {
                $result = 'yes';
            } else {
                return 'no';
            }
        }
        return $result;
    };

    game($question, $task);
}
