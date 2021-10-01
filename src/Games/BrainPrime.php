<?php

namespace Brain\Games\BrainPrime;

use function cli\line;
use function Brain\Engine\game;

function brainPrime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $task = function () {
        $num = rand(1, 99);
        line("Question: $num");
        $result = 'no';
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i === 0) {
                $result = 'no';
            } else {
                $result = 'yes';
            }
        }
        return $result;
    };

    game($question, $task);
}
