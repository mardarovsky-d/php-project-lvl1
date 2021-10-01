<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function game($question, $task)
{
    $victoryCount = 0;
    $gamesCount = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("$question");
    for ($i = 0; $i < $gamesCount; $i++) {
        $correct = $task();
        $answer = prompt("Your answer");
        if (intval($answer) !== $correct) {
            line("$answer is wrong answer ;(. Correct answer was $correct.\nLet's try again, %s!", $name);
        } else {
            line("Correct!");
            $victoryCount++;
        }
    }
    if ($victoryCount === $gamesCount) {
        line("Congratulations, %s!", $name);
    }
}
